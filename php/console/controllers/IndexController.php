<?php
/**
 *.
 * User: qieangel2013
 * Date: 2018/12/20
 * Time: 14:35
 */

namespace console\controllers;

use console\models\slowquery_slowlog;
use console\models\slowquery_slowrecord;
use SqlAudit\Base\SeeapiService;
use SqlAudit\Base\SlowlogService;
use yii;

class IndexController extends \yii\console\Controller
{
    private $slow_map = [
              'DescribeSlowLogs'=>[
                  'class' =>'console\models\slowquery_slowlog',
                  'log'   =>'SQLSlowLog'
              ],              
              'DescribeSlowLogRecords'=>[
                  'class' =>'console\models\slowquery_slowrecord',
                  'log'   =>'SQLSlowRecord'
              ]
    ];
    private $sql_id_arr;
    private function sortKeyData($fields,$data){
        $result = [];
        foreach ($fields as $v) {
            foreach ($data as $kk => $vv) {
                if($v==$kk){
                    $result[$v]=$vv;
                }
            }
        }
        return $result;
    }

    private function composeInsertData(&$data,$slowtype,$slowlog='',$startstr='',$endstr='',$sqlids = ''){
        $sql_id_data=[];
        $sqlid = [];
        $data_tmp = [];
        $fields_slowlog=(new $this->slow_map[$slowtype]['class'])->attributes();
        $fields_slowlog && array_shift($fields_slowlog);
        if($data){
            foreach ($data as &$v) {
                if ($slowtype=='DescribeSlowLogs'){
                    if(date('Y-m-d',strtotime($v['CreateTime'])) != date('Y-m-d')){
                      continue;
                    }
                    $v['CreateTime'] = date('Y-m-d',strtotime($v['CreateTime']));
                    $sqlid[] = $v['SQLIdStr'] = $v['SQLHASH'];
                    $v['slow_status'] = 0;
                    unset($v['SQLHASH']);
                    $data_tmp[] = $this->sortKeyData($fields_slowlog,$v);
                }else{
                    $timetmp = strtotime($v['ExecutionStartTime']);
                    $v['ExecutionStartTime'] = date('Y-m-d H:i:s',$timetmp);
                    $data_tmp[]=array_merge(['SQLId' => $sqlids],$this->sortKeyData($fields_slowlog,$v));
                    $sqlid[] = $sqlids;
                }    
            }
       }
       $sqlid && $sqlid = array_unique($sqlid);
        //去除重复数据
        $sqlid && $sqlid_tmp = $this->slow_map[$slowtype]['class']::getsqlidexits($sqlid,$startstr,$endstr);
        $sqlid_diff = isset($sqlid_tmp) && $sqlid_tmp ? array_diff($sqlid,$sqlid_tmp) : $sqlid;
        if(isset($sqlid_diff)){
            foreach ($sqlid_diff as $m => $n) {
                foreach ($data_tmp as $vv) {
                	if ($slowtype=='DescribeSlowLogs'){
                		if($n==$vv['SQLIdStr']){
                        	$sql_id_data[]=$vv;
                        	$this->sql_id_arr[]=$vv['SQLIdStr'];
                        	//$this->Record($slowlog,$vv['SQLIdStr'],$startstr,$endstr);
                    	}
                    }else{
                    	if($n==$vv['SQLId']){
                        	$sql_id_data[]=$vv;
                    	}
                    }
                }
            }
        }
       return $sql_id_data;
    }

    private function batchInsert($slowlog,$startstr,$endstr,$data,$slowtype,$sqlid = ''){
       $data && $insertData = $this->composeInsertData($data,$slowtype,$slowlog,$startstr,$endstr,$sqlid);
        isset($insertData) && $insertData && $this->slow_map[$slowtype]['class']::batchInsert($insertData);
    }

    private function pageData($Page,$PageSize,$startstr,$endstr,$slowlog,$slowtype='DescribeSlowLogs'){
    	$taskUrl = $slowlog->setAction($slowtype)->setStartTime($startstr)->setEndTime($endstr)->setPageSize($PageSize)->setPageNumber($Page)->composeData();
    	$result =$this->formatData($slowlog->addTaskno($taskUrl),$slowtype);
        if(isset($result['data'])){
            echo $this->slow_map[$slowtype]['log'].'在第'.$Page.'页获取总条数为：'.count($result['data']).'条!'.PHP_EOL;
        }
        isset($result['data']) && $result['data'] && $this->batchInsert($slowlog,$startstr,$endstr,$result['data'],$slowtype);
        return $result;
    }

     private function formatData($data,$slowtype='DescribeSlowLogs',$sqlid=''){
     	$result = [];
    	if($data){
    		if($slowtype == 'DescribeSlowLogs'){
    			foreach ($data as &$v) {
	    			if(!is_array($v)){
	    				$v = json_decode($v,true);
	    				if(!empty($v['Items'][$this->slow_map[$slowtype]['log']])){
	    					foreach ($v['Items'][$this->slow_map[$slowtype]['log']] as $m) {
	    						$result['data'][] = $m;
	    					}
	    					$result['PageNumber'] = $v['PageNumber'];
	    					$result['TotalRecordCount'] = $v['TotalRecordCount'];
	    					$result['PageRecordCount'] = $v['PageRecordCount'];
	    				}
	    			}
    			}
    		}else if(!empty($data[$sqlid]) && $sqlid){
    			foreach ($data[$sqlid] as &$v) {
	    			if(!is_array($v)){
	    				$v = json_decode($v,true);
	    				if(!empty($v['Items'][$this->slow_map[$slowtype]['log']])){
	    					foreach ($v['Items'][$this->slow_map[$slowtype]['log']] as $m) {
	    						$result['data'][] = $m;
	    					}
	    					$result['PageNumber'] = $v['PageNumber'];
	    					$result['TotalRecordCount'] = $v['TotalRecordCount'];
	    					$result['PageRecordCount'] = $v['PageRecordCount'];
	    				}
	    			}
    			}
    		}
    		
    	}
    	return $result;
    }

    private function pageRecordDataIN($Page,$PageSize,$startstr,$endstr,$slowlog,$slowtype='DescribeSlowLogRecords',$sqlid){
    	$taskUrl = $slowlog->setAction($slowtype)->setStartTime($startstr)->setEndTime($endstr)->setPageSize($PageSize)->setPageNumber($Page)->setSQLId($sqlid)->composeData();
    	$slowlog->addTask($taskUrl);
    }

    private function pageDataIN($Page,$PageSize,$startstr,$endstr,$slowlog,$slowtype='DescribeSlowLogs'){
    	$taskUrl = $slowlog->setAction($slowtype)->setStartTime($startstr)->setEndTime($endstr)->setPageSize($PageSize)->setPageNumber($Page)->composeData();
    	$slowlog->addTask($taskUrl);
    }

    private function pageRecordData($Page,$PageSize,$startstr,$endstr,$slowlog,$slowtype='DescribeSlowLogRecords',$sqlid){
       $taskUrl = $slowlog->setAction($slowtype)->setStartTime($startstr)->setEndTime($endstr)->setPageSize($PageSize)->setPageNumber($Page)->setSQLId($sqlid)->composeData();
    	$result =$this->formatData($slowlog->addTasknoId($taskUrl,$sqlid),$slowtype,$sqlid);
        if(isset($result['data'])){
            echo $this->slow_map[$slowtype]['log'].'在第'.$Page.'页获取总条数为：'.count($result['data']).'条!'.PHP_EOL;
        }
        isset($result['data']) && $result['data'] && $this->batchInsert($slowlog,$startstr,$endstr,$result['data'],$slowtype,$sqlid);
        return $result;
    }



    public function Record($slowlog,$sqlid,$startstr='',$endstr=''){
       if($startstr=='' && $endstr==''){
          $startstr = date("Y-m-d");
          $endstr = date("Y-m-d",strtotime("+1 day"));
       }
       $Page = 1;
       $PageSize =100;
       $result = $this->pageRecordData($Page,$PageSize,$startstr,$endstr,$slowlog,'DescribeSlowLogRecords',$sqlid);
       if(isset($result['TotalRecordCount']) && $result['TotalRecordCount']>($Page * $PageSize)){
            $page_total=ceil($result['TotalRecordCount']/$result['PageRecordCount']);
            echo 'slowlogRecord开始执行 '.date('Y-m-d H:i:s').'!'.PHP_EOL;
            echo 'slowlogRecord总页数'.$page_total.'!'.PHP_EOL;
            echo 'slowlogRecord获取第'.$Page.'页成功!'.PHP_EOL;
            for ($i=0; $i <$page_total-1; $i++) { 
                $Page++;
                echo 'slowlogRecord获取第'.$Page.'页成功!'.PHP_EOL;
                $this->pageRecordDataIN($Page,$PageSize,$startstr,$endstr,$slowlog,'DescribeSlowLogRecords',$sqlid);
            }
            $slowData = $this->formatData($slowlog->run(),'DescribeSlowLogRecords');
            if(!empty($slowData['data'])){
            	$this->batchInsert($slowlog,$startstr,$endstr,$slowData['data'],'DescribeSlowLogRecords',$sqlid);
            }

       }
       echo 'slowlogRecord succ'.PHP_EOL;
       return true;
    }

    public function taskyield($slowlog,$startstr,$endstr){
    	$generator = call_user_func(function() use($slowlog,$startstr,$endstr) {
    		if($this->sql_id_arr){
    			foreach ($this->sql_id_arr as $kk => $vv) {
    				yield $this->Record(new SlowlogService,$vv,$startstr,$endstr);
    			}
    		}	
		});
    	$slowlog->addGenerator($generator);
    	$slowlog->run();
    }

    public function actionIndex($startstr='',$endstr=''){
       ini_set('memory_limit', '256M');
       date_default_timezone_set('PRC');
       $slowlog = new SlowlogService;
       if($startstr=='' && $endstr==''){
          $startstr = date("Y-m-d");
          $endstr = date("Y-m-d",strtotime("+1 day"));
       }
       $Page = 1;
       $PageSize =30;
       $result = $this->pageData($Page,$PageSize,$startstr,$endstr,$slowlog);
       if(isset($result['TotalRecordCount']) && $result['TotalRecordCount']>($Page * $PageSize)){
            $page_total=ceil($result['TotalRecordCount']/$result['PageRecordCount']);
            echo 'slowlog开始执行 '.date('Y-m-d H:i:s').'!'.PHP_EOL;
            echo 'slowlog总页数'.$page_total.'!'.PHP_EOL;
            echo 'slowlog获取第'.$Page.'页成功!'.PHP_EOL;
            for ($i=0; $i <$page_total-1; $i++) { 
                $Page++;
                echo 'slowlog获取第'.$Page.'页成功!'.PHP_EOL;
                $this->pageDataIN($Page,$PageSize,$startstr,$endstr,$slowlog);
            }
            $slowData = $this->formatData($slowlog->run());
            if(!empty($slowData['data'])){
            	$this->batchInsert($slowlog,$startstr,$endstr,$slowData['data'],'DescribeSlowLogs');
            }
       }
       $this->taskyield(new SlowlogService,$startstr,$endstr);
       echo 'slowlog succ'.PHP_EOL;
       exit;
    }

    public function actionDel($days=60,$startstr='',$endstr=''){
       if($startstr=='' && $endstr==''){
          $endstr = date("Y-m-d",strtotime("-".$days." day"));
       }
       $this->slow_map['DescribeSlowLogs']['class']::deldata($startstr,$endstr);
       echo 'slowlog删除数据成功！'.PHP_EOL;
       $this->slow_map['DescribeSlowLogRecords']['class']::deldata($startstr,$endstr);
       echo 'slowlogRecord删除数据成功！'.PHP_EOL;
       echo 'del succ'.PHP_EOL;
       exit;
    }



}