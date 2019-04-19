<?php

namespace console\models;

use Yii;
use yii\base\NotSupportedException;

class slowquery_slowrecord extends \yii\db\ActiveRecord
{

	public static function getsqlidexits($sqlidarr,$startstr='',$endstr=''){
        if($startstr=='' && $endstr==''){
          $startstr = date("Y-m-d");
          $endstr = date("Y-m-d",strtotime("+1 day"));
       }
        return array_map(function($record) { if($record->SQLId){ return $record->SQLId;}},static::find()->select('SQLId')->where(['and',['in','SQLId',$sqlidarr],['>=','ExecutionStartTime',$startstr],['<=','ExecutionStartTime',$endstr]])->all()) ? array_map(function($record) { if($record->SQLId){ return $record->SQLId;}},static::find()->select('SQLId')->where(['and',['in','SQLId',$sqlidarr],['>=','ExecutionStartTime',$startstr],['<=','ExecutionStartTime',$endstr]])->all()) : [];
    }

    public static function batchInsert($data){
        $fields = \yii\helpers\ArrayHelper::getColumn((Yii::$app->db->schema->getTableSchema(self::tableName()))->columns, 'name', false);
        $fields && array_shift($fields);
        return Yii::$app->db->createCommand()->batchInsert(self::tableName(), $fields,$data)->execute();
    }

    public static function deldata($startstr,$endstr){
        if($startstr){
            $sql = 'DELETE FROM '.self::tableName().' WHERE ExecutionStartTime>='.$startstr.' AND ExecutionStartTime<='.$endstr;
        }else{
            $sql = 'DELETE FROM '.self::tableName().' WHERE ExecutionStartTime<='.$endstr;
        }
        return Yii::$app->db->createCommand($sql)->execute();
    }

}
