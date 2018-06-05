<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 05.06.2018
 * Time: 15:32
 */

namespace frontend\models\test;


use frontend\models\User;
use yii\base\Model;
use Yii;

class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;


    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'string', 'max' => '100'],
            ['username', 'required'],

            ['password', 'required'],

            ['email', 'trim'],
            [['email'], 'unique', 'targetClass' => User2::className()],
            [['username'], 'unique', 'targetClass' => User2::className()],

        ];
    }
    public function save()
    {
        if($this->validate()) {
            $user = new User2();

            $user->email = $this->email;
            $user->username = $this->username;
            $user->created_at = $time =  time();
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);

            return $user->save();

        }
    }

}




