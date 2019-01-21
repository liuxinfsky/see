<?php
/**
 * 慢查询日志调用api服务类
 * @author: qieangel2013 2018/12/19
 *
 */
namespace SqlAudit\Base;

use SqlAudit\Base\Service;
use \Generator;
use \SplQueue;
use \Closure;
use \Exception;

class Task {
    protected $taskId;
    protected $coroutine;
    protected $sendValue = null;
    protected $beforeFirstYield = true;
 
    public function __construct($taskId, Generator $coroutine) {
        $this->taskId = $taskId;
        $this->coroutine = $coroutine;
    }
 
    public function getTaskId() {
        return $this->taskId;
    }
 
    public function setSendValue($sendValue) {
        $this->sendValue = $sendValue;
    }
 
    public function run() {
        if ($this->beforeFirstYield) {
            $this->beforeFirstYield = false;
            return $this->coroutine->current();
        } else {
            $retval = $this->coroutine->send($this->sendValue);
            $this->sendValue = null;
            return $retval;
        }
    }
 
    public function isFinished() {
        return !$this->coroutine->valid();
    }
}

//调度程序
class Scheduler {
    protected $maxTaskId = 0;
    protected $taskMap = []; // taskId => task
    protected $taskCall = [];
    protected $taskQueue;
 
    public function __construct() {
        $this->taskQueue = new SplQueue();
    }

    public function newTask(Generator $coroutine, $callback = null) {
        $tid = ++$this->maxTaskId;
        $task = new Task($tid, $coroutine);
        $this->taskMap[$tid] = $task;
        if (!empty($callback) && $callback instanceof Closure) {
            $this->taskCall[$tid] = $callback;
        }
        $this->schedule($task);
        return $tid;
    }
    
    //入队列
    public function schedule(Task $task) {
        $this->taskQueue->enqueue($task);
    }

    //与调度器之间通信
    public function run() {
        while (!$this->taskQueue->isEmpty()) {
            $task = $this->taskQueue->dequeue();
            $taskId = $task->getTaskId();
            $retval = $task->run();

            if ($retval instanceof CustomCall) {
                $retval($task, $this);
                continue;
            } elseif (is_array($retval) && $retval['0'] == CustomCall::RESULT_KEY) {
                //如果存在回调函数
                if (!empty($this->taskCall[$taskId])) {
                    $callback = $this->taskCall[$taskId];
                    $callback($retval['1'], $this);
                }       
            }

            if ($task->isFinished()) {
                $this->killTask($taskId);
            } else {
                $this->schedule($task);
            }
        }
    }

    /**
     *  删除任务
     */
    public function killTask($tid, $delQueue = false) {
        if (!isset($this->taskMap[$tid])) {
            return false;
        }
     
        unset($this->taskMap[$tid]);
        unset($this->taskCall[$tid]);

        if (!$delQueue) {
            return true;
        }
        
        foreach ($this->taskQueue as $i => $task) {
            if ($task->getTaskId() === $tid) {
                unset($this->taskQueue[$i]);
                break;
            }
        }
     
        return true;
    }
}

class Curl {
    public   $debug = false; //调试模式
    public   $multiOn = false;  //多线程模式(使用yiled时必须开启)
    private  $_mh;
    private  $_ch;
    private  $_header;
    private  $_body;
    private  $_cookie  = array();
    private  $_options = array();
    private  $_url     = array();
    private  $_referer = array();
    private  $_optArray = array();

    public function __construct(array $config= []){
        $this->setOption($config);
    }

    /**
     *  便捷请求方法
     */
    public static function request(...$param){
        $object = new self();
        $object->multiOn = true;
        return $object->callWebServer(...$param);
    }

    /**
     * 调用外部url
     *
     * @param
     *            $queryUrl
     * @param $param 参数            
     * @param string $method            
     * @return bool|mixed
     */
    public function callWebServer($queryUrl, $param = '', $method = 'get', $is_json = false, $is_urlcode = true) {
        if (empty($queryUrl)) {
            return false;
        }
        $method = strtolower($method);
        $ret    = '';
        $param  = empty($param) ? array() : $param;
        $this->_init();
        if ($method == 'get') {
            $ret = $this->_httpGet($queryUrl, $param);
        } elseif ($method == 'post') {
            $ret = $this->_httpPost($queryUrl, $param, $is_urlcode);
        }
        if ($this->multiOn) {
            return $ret;
        }
        if (!empty($ret)) {
            if ($is_json) {
                return json_decode($ret, true);
            } else {
                return $ret;
            }
        }
        return true;
    }

    public function setConfig($_optArray = array()){
        $this->_optArray = $_optArray;
    }

    private function setOption($optArray = array()) {
        
        foreach ($optArray as $key => $value) {          
            curl_setopt($this->_ch, $key, $value);
        }
    }

    private function _init() {

        $this->_ch = curl_init();
        if (!empty($this->_optArray)) {
            $this->setOption($this->_optArray);
        }
        curl_setopt($this->_ch, CURLOPT_HEADER, true);
        curl_setopt($this->_ch, CURLOPT_RETURNTRANSFER, true);
        if ($this->multiOn) {
            //多线程
            $this->_mh = curl_multi_init();
            $reulst = curl_multi_add_handle($this->_mh, $this->_ch);
        }
    }

    private function _close() {
        //多线程模式不立即关闭
        if (is_resource($this->_ch) && !$this->multiOn) {
            curl_close($this->_ch);
        }

        return true;
    }

    private function _httpGet($url, $query = array()) {
        if (!empty($query)) {
            $url .= (strpos($url, '?') === false) ? '?' : '&';
            $url .= is_array($query) ? http_build_query($query) : $query;
        }
        curl_setopt($this->_ch, CURLOPT_URL, $url);
        curl_setopt($this->_ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->_ch, CURLOPT_HEADER, 0);
        curl_setopt($this->_ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($this->_ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($this->_ch, CURLOPT_SSLVERSION, 1);

        if ($this->multiOn) {
            $ret = $this->_executeMulti();
        } else {
            $ret = $this->_execute();
        }
        $this->_close();
        return $ret;
    }

    private function _httpPost($url, $query = array(), $is_urlcode = true) {
        if (is_array($query)) {
            foreach ($query as $key => $val) {
                if ($is_urlcode) {
                    $encode_key = urlencode($key);
                } else {
                    $encode_key = $key;
                }
                if ($encode_key != $key) {
                    unset($query[$key]);
                }
                if ($is_urlcode && is_string($val)) {
                    $query[$encode_key] = urlencode($val);
                } else {
                    $query[$encode_key] = $val;
                }
            }
        }
        
        curl_setopt($this->_ch, CURLOPT_URL, $url);
        curl_setopt($this->_ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->_ch, CURLOPT_HEADER, 0);
        curl_setopt($this->_ch, CURLOPT_POST, true);
        curl_setopt($this->_ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($this->_ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($this->_ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($this->_ch, CURLOPT_SSLVERSION, 1);
        if ($this->multiOn) {
            $ret = $this->_executeMulti();
        } else {
            $ret = $this->_execute();
        }
        
        $this->_close();
        return $ret;
    }

    private function _put($url, $query = array()) {
        curl_setopt($this->_ch, CURLOPT_CUSTOMREQUEST, 'PUT');

        return $this->_httpPost($url, $query);
    }

    private function _delete($url, $query = array()) {
        curl_setopt($this->_ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

        return $this->_httpPost($url, $query);
    }

    private function _head($url, $query = array()) {
        curl_setopt($this->_ch, CURLOPT_CUSTOMREQUEST, 'HEAD');

        return $this->_httpPost($url, $query);
    }

    private function _execute() {
        
        $response = curl_exec($this->_ch);
        $errno    = curl_errno($this->_ch);
        if ($errno > 0 && $this->$debug) {
            throw new Exception(curl_error($this->_ch), $errno);
        }

        return $response;
    }

    private function _executeMulti(){
        do {
            $mrc = curl_multi_exec($this->_mh, $active);
            yield null;  //协程切换
        } while ($active > 0);
        $response = curl_multi_getcontent($this->_ch);
        yield CustomCall::returnReust($response);
        $this->__destruct();
        return false;
    }

    public function __destruct(){
        if (is_resource($this->_mh)) {
            curl_multi_remove_handle($this->_mh, $this->_ch);
            curl_multi_close($this->_mh);
        }
        if (is_resource($this->_ch)) {
            curl_close($this->_ch);
        }
        
    }
}

class CustomCall{
    protected $callback;

    CONST RESULT_KEY = '@result';

    public function __construct(callback $callback){
        $this->callback = $callback;
    }

    public function __invoke(Task $task, Scheduler $scheduler) {
        $callback = $this->callback;
        return $callback($task, $scheduler);
    }

    public static function returnReust($data){
        return [self::RESULT_KEY, $data];
    }
}



class SlowlogService extends Service
{

    private $rds_url='https://rds.aliyuncs.com/?';

    private $Action;

    private $DBInstanceId;

    private $endTime;

    private $startTime;

    private $Format='json';

    private $Version='2014-08-15';

    private $Signature;

    private $SignatureMethod='HMAC-SHA1';

    private $SignatureNonce;

    private $SignatureVersion='1.0';

    private $AccessKeyId;

    private $AccessKeySecret;

    private $Timestamp;

    protected $queryParameters = array();

    private $dateTimeFormat = 'Y-m-d\TH:i:s\Z';

    private $dTimeFormat = 'Y-m-d\TH:i\Z';

    private $dateFormat = 'Y-m-d\Z';

    private $method='GET';

    private $SQLHASH;

    private $pageSize;

    private $pageNumber;

    public  $scheduler;

    public  $taskData;

    public function __construct()
    {
        $this->setAccessKeyId(\Yii::$app->params['AccessKeyID']);
        $this->setAccessKeySecret(\Yii::$app->params['AccessKeySecret']);
        $this->setDBInstanceId(\Yii::$app->params['DBInstanceId']);
        $this->scheduler = new scheduler;
    }

    public function getAction() {
        return $this->Action;
    }

    public function setAction($Action) {
        $this->Action = $Action;
        return $this;
    }

    public function getSQLId() {
        return $this->SQLHASH;
    }

    public function setSQLId($SQLId) {
        $this->SQLHASH = $SQLId;
        $this->queryParameters["SQLHASH"]=$SQLId;
        return $this;
    }

    public function getPageSize() {
        return $this->pageSize;
    }

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
        $this->queryParameters["PageSize"]=$pageSize;
        return $this;
    }

    public function getPageNumber() {
        return $this->pageNumber;
    }

    public function setPageNumber($pageNumber) {
        $this->pageNumber = $pageNumber;
        $this->queryParameters["PageNumber"]=$pageNumber;
        return $this;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime($endTime) {
        $this->Action && $this->Action=='DescribeSlowLogs'?$endTime=gmdate($this->dateFormat,strtotime($endTime)):$endTime=gmdate($this->dTimeFormat,strtotime($endTime.' 23:59:59'));
        $this->endTime = $endTime;
        $this->queryParameters["EndTime"]=$endTime;
        return $this;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime($startTime) {        
        $this->Action && $this->Action=='DescribeSlowLogs'?$startTime=gmdate($this->dateFormat,strtotime($startTime)):$startTime=gmdate($this->dTimeFormat,strtotime($startTime.' 00:00:00'));
        $this->startTime = $startTime;
        $this->queryParameters["StartTime"]=$startTime;
        return $this;
    }

    public function getDBInstanceId() {
        return $this->dBInstanceId;
    }

    public function setDBInstanceId($dBInstanceId) {
        $this->dBInstanceId = $dBInstanceId;
        $this->queryParameters["DBInstanceId"]=$dBInstanceId;
    }

    public function getAccessKeyId() {
        return $this->AccessKeyId;
    }

    public function setAccessKeyId($AccessKeyId) {
        $this->AccessKeyId = $AccessKeyId;
    }

    public function getAccessKeySecret() {
        return $this->AccessKeySecret;
    }

    public function setAccessKeySecret($AccessKeySecret) {
        $this->AccessKeySecret = $AccessKeySecret;
    }

    private function prepareValue($value)
    {
        if (is_bool($value)) {
            if ($value) {
                return "true";
            } else {
                return "false";
            }
        } else {
            return $value;
        }
    }

   public function composeData()
    {
        foreach ($this->queryParameters as $key => $value) {
            $apiParams[$key] = $this->prepareValue($value);
        }
        $apiParams["AccessKeyId"] = $this->getAccessKeyId();
        $apiParams["Format"] = $this->Format;
        $apiParams["SignatureMethod"] = $this->SignatureMethod;
        $apiParams["SignatureVersion"] = $this->SignatureVersion;
        $apiParams["SignatureNonce"] = md5(uniqid(mt_rand(), true));
        $apiParams["Timestamp"] = gmdate($this->dateTimeFormat);
        $apiParams["Action"] = $this->getAction();
        $apiParams["Version"] = $this->Version;
        $this->SQLHASH && $apiParams["SQLHASH"] = $this->SQLHASH;
        $apiParams["Signature"] = $this->computeSignature($apiParams, $this->getAccessKeySecret());
        $requestUrl = $this->rds_url;
        foreach ($apiParams as $apiParamKey => $apiParamValue) {
            $requestUrl .= "$apiParamKey=" . urlencode($apiParamValue) . "&";
        }
        return substr($requestUrl, 0, -1);
        //return $this->GetData(substr($requestUrl, 0, -1));
    }
    
    private function computeSignature($parameters, $accessKeySecret)
    {
        ksort($parameters);
        $canonicalizedQueryString = '';
        foreach ($parameters as $key => $value) {
            $canonicalizedQueryString .= '&' . $this->percentEncode($key). '=' . $this->percentEncode($value);
        }
        $stringToSign = $this->method.'&%2F&' . $this->percentencode(substr($canonicalizedQueryString, 1));
        $signature = $this->signString($stringToSign, $accessKeySecret."&");
        return $signature;
    }

    private function signString($source, $accessSecret){
        return base64_encode(hash_hmac('sha1', $source, $accessSecret, true));
    }
    
    protected function percentEncode($str)
    {
        $res = urlencode($str);
        $res = preg_replace('/\+/', '%20', $res);
        $res = preg_replace('/\*/', '%2A', $res);
        $res = preg_replace('/%7E/', '~', $res);
        return $res;
    }

    public function addTask($url) {
        $this->scheduler->newTask(Curl::request($url),function($data,Scheduler $scheduler){
            $this->taskData[] = $data;
        });
        return $this;
    }

    public function addTaskId($url,$sqlid) {
        $this->scheduler->newTask(Curl::request($url),function($data,Scheduler $scheduler) use($sqlid){
            $this->taskData[$sqlid][] = $data;
        });
        return $this;
    }

    public function addGenerator($generator) {
        $this->scheduler->newTask($generator);
        return $this;
    }

    public function run(){
        $this->scheduler->run();
        return $this->taskData;
    }

    /**
     * 名称:  请求接口获取数据
     * 参数:  string $key     接口地址
     * 返回值: array   数据;
     */

    private function GetDatas($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1) ;
        curl_setopt($ch, CURLOPT_TIMEOUT, 300);   //只需要设置一个秒的数量就可以
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_DNS_USE_GLOBAL_CACHE, false );
        curl_setopt($ch, CURLOPT_SSLVERSION, 3);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ;
        $output = curl_exec($ch);
        if($output === false){ 
            if(curl_errno($ch) == CURLE_OPERATION_TIMEDOUT){   
            }else{
            }
        }
        curl_close($ch);
        if (empty($output)) {
            return ;
        }
        return $output;
    }
}

