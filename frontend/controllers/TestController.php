<?php

namespace frontend\controllers;
use frontend\models\example\ExampleValidation;
use yii\base\Controller;
use Yii;

class TestController extends Controller
{
    public function actionIndex()
    {

        $model = new ExampleValidation();

        $formData = Yii::$app->request->post();
        if (Yii::$app->request->isPost) {


            $model->birthDate = $formData['birthDate'];
            $model->startWorkData = $formData['startWorkData'];
            $model->city = $formData['city'];
            $model->position = $formData['position'];
            $model->identifityCode = $formData['identifityCode'];


            if ($model->validate()) {
                $model->save();
                Yii::$app->session->setFlash('success', 'yes');
            }
        }


        return $this->render('index', [
            'model' => $model,
            'formData' => $formData,
        ]);
    }
}