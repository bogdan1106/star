<?php

namespace frontend\controllers;


use yii\web\Controller;
use Yii;

class AliasController extends Controller
{
    public function actionIndex()
    {

       echo Yii::getAlias('@app');

    }

}