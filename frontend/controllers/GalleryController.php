<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 12.03.2018
 * Time: 0:52
 */

namespace frontend\controllers;


use yii\base\Controller;
use Yii;

class GalleryController extends Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }
}