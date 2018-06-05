<?php

namespace frontend\controllers;


use frontend\models\test\SignupForm;
use yii\base\Controller;
use frontend\models\test\User2;
use Yii;

class User2Controller extends Controller
{
    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success','User register');
            $this->redirect(['site/index']);


        }

        return $this->render('signup',[
            'model' => $model,
        ]);
    }

}
