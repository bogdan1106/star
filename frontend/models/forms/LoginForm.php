<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 31.05.2018
 * Time: 15:01
 */

namespace frontend\models\forms;

use frontend\models\User;
use yii\base\Model;
use Yii;

class LoginForm extends Model
{
    public $username;
    public $password;


    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['password', 'required'],
            ['password', 'validatePassword'],

        ];
    }

    public function login()
    {
        if($this->validate()) {
            $user = User::findByUserName($this->username);
            Yii::$app->user->login($user);

        }
    }

    public function validatePassword($attribute, $params)
    {
        $user = User::findByUserName($this->username);
        if (!$user || !$user->validatePassword($this->password)) {
            $this->addError($attribute, 'Неправильно');
        }

    }


}