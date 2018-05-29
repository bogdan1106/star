<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 20.02.2018
 * Time: 19:52
 */

namespace frontend\controllers;


use yii\base\Controller;
use Yii;
use frontend\models\Subscribe;



class NewsletterController extends Controller
{
    public function actionSubscribe()
    {



        $formData = Yii::$app->request->post();
        $model = new Subscribe();



        if(Yii::$app->request->isPost) {
            $model->email = $formData['email'];


            $queryEmail = Subscribe::emailCompare( $model->email);
             if ($queryEmail['email'] != null)
            {
                echo 'Такая почта уже существует тут ';
                die;
            }

            if ($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Subscribe compleated');

            }


        };

        return $this->render('subscribe', [
            'model' => $model,
            'queryEmail' => $queryEmail,
        ]);
    }

}