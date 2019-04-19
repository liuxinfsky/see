<?php

namespace console\models;

use Yii;
use yii\base\NotSupportedException;

class slowquery_slowlog extends \yii\db\ActiveRecord
{
    /**
     *获取sqlid
     * @return array sql数据
     */
    public static function getsqlid($sqlid)
    {
        if ($sqlid) {
            return static::find()->where(['SQLIdStr' => $sqlid])->One();
        } else {
            return [];
        }
    }

    public static function getsqlidexits($sqlidarr,$startstr='',$endstr=''){
        if($startstr=='' && $endstr==''){
          $startstr = date("Y-m-d");
          $endstr = date("Y-m-d",strtotime("+1 day"));
       }
        return array_map(function($record) { if($record->SQLIdStr){ return $record->SQLIdStr;}},static::find()->select('SQLIdStr')->where(['and',['in','SQLIdStr',$sqlidarr],['>=','CreateTime',$startstr],['<=','CreateTime',$endstr]])->all()) ? array_map(function($record) { if($record->SQLIdStr){ return $record->SQLIdStr;}},static::find()->select('SQLIdStr')->where(['and',['in','SQLIdStr',$sqlidarr],['>=','CreateTime',$startstr],['<=','CreateTime',$endstr]])->all()) : [];
    }

    public static function batchInsert($data){
        $fields = \yii\helpers\ArrayHelper::getColumn((Yii::$app->db->schema->getTableSchema(self::tableName()))->columns, 'name', false);
        $fields && array_shift($fields);
        return Yii::$app->db->createCommand()->batchInsert(self::tableName(), $fields,$data)->execute();
    }

    public static function deldata($startstr,$endstr){
        if($startstr){
            $sql = 'DELETE FROM '.self::tableName().' WHERE CreateTime>='.$startstr.' AND CreateTime<='.$endstr;
        }else{
            $sql = 'DELETE FROM '.self::tableName().' WHERE CreateTime<='.$endstr;
        }
        return Yii::$app->db->createCommand($sql)->execute();
    }
}
