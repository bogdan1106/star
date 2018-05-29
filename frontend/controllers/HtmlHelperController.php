<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 19.03.2018
 * Time: 16:16
 */

namespace frontend\controllers;


use yii\web\Controller;
use frontend\models\Employee;

class HtmlHelperController extends Controller
{
    public function actionDemo()
    {
        $employers = Employee::find();

        return $this->render('demo', [
            'employers' => $employers,4
        ]);
    }
}