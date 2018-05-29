<?php

namespace frontend\models\example;


use yii\base\Model;
use Yii;

class ExampleValidation extends Model
{
    public $birthDate;
    public $startWorkData;
    public $city;
    public $position;
    public $identifityCode;


    public function rules(){

        return [
            [['birthDate'], 'required'],
            [['birthDate'], 'date', 'format' => 'php:Y-m-d'],
            [['startWorkData'], 'required'],
            [['startWorkData'], 'date', 'format' => 'php:Y-m-d'],
            [['position'], 'required'],
            [['identifityCode'], 'required'],
            [['identifityCode'] ,'match', 'pattern' => '/[0-9]{10}/'],

        ];
    }

    public function save(){

        $sql = "INSERT INTO peoples (`id`, `birthDate`, `startWorkData`, `city`, `position`, `identifityCode`) VALUES (NULL, '{$this->birthDate}', '{$this->startWorkData}','{$this->city}','{$this->position}', '{$this->identifityCode}');";

        return Yii::$app->db->createCommand($sql)->execute();


    }

}