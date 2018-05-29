<?php
/**
 *
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Lis;




class NewController extends Controller
{
    public function actionIndex()
    {
        $max = Yii::$app->params['maxItemsOnIndexPage'];
        $list = Lis::getLis($max);

        return $this->render('index', [
            'list' => $list,
            'max' => $max,
        ]);
    }



    public function actionView($id)
    {
        $item = Lis::getItem($id);


        return $this->render('view', [
            'id' => $id,
            'item' => $item,
        ]);
    }
}