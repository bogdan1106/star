<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 20.02.2018
 * Time: 20:52
 */

namespace frontend\models;


use yii\base\Model;
use Yii;

class Subscribe extends Model
{
    public $email;

    public static function emailCompare($gim)
    {
        $sql = " SELECT email FROM subscriber where email = '{$gim}'";
       return Yii::$app->db->createCommand($sql)->queryOne();
    }


    public function rules()
    {
        return [
            [['email'], 'required'],
        [['email'], 'email'],
        ];
    }

    public function save()
    {
        $sql = "INSERT INTO subscriber (id, email) VALUES (null, '{$this->email}' )";
        return Yii::$app->db->createCommand($sql)->execute();
    }
}