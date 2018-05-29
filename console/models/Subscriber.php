<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 18.02.2018
 * Time: 23:27
 */

namespace console\models;

use Yii;
class Subscriber
{
    public static function getList()
    {
        $sql = 'SELECT * FROM subscriber ';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

}