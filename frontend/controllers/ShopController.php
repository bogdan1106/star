<?php

namespace frontend\controllers;

use frontend\models\shop\Products;
use yii\web\Controller;
use yii\helpers\Html;
use Yii;





class ShopController extends Controller
{
    public function actionCreate()
    {
        $camera = new Products();


        if ($camera->load(Yii::$app->request->post())) {

            $camera->save();
        }

        return $this->render('create',[
                'camera' => $camera,
            ]);
    }


    public function actionIndex()
    {
        return $this->render('index');
    }

}
