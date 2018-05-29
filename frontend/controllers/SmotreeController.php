<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 03.04.2018
 * Time: 15:09
 */

namespace frontend\controllers;


use yii\web\Controller;

class SmotreeController extends Controller
{
    public $layout = 'smotree';

    public function actionIndex()
    {
        return $this->render('index');
    }
}