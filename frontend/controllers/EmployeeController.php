<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 19.02.2018
 * Time: 23:51
 */

namespace frontend\controllers;



use Yii;
use frontend\models\Employee;
use yii\base\Controller;
use frontend\models\example\Animal;
use frontend\models\example\Human;

class EmployeeController extends Controller
{
    public function actionIndex()
    {
        $employee1 = new Employee();
        $employee1->firstName = 'alex';
        $employee1->lastName = 'Bentley';
        $employee1->salary = '20';

        echo $employee1['salary'];
        echo '<br>';
        foreach ($employee1 as $attribute => $value) {

            echo $attribute. ' '. $value. '<br>';
            echo '<br>';

            $array = $employee1->toArray();

        }


    }




    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        if ($model->load($data = Yii::$app->request->post())) {

            if($model->validate() &&  $model->save()) {
               Yii::$app->session->setFlash('success', 'yeah beach');
            }
        }
        return $this->render('register', [
            'model' => $model,
        ]);
    }


    public function actionUpdate()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {

            $model->attributes = $formData;


            if($model->validate() &&  $model->save()) {
                Yii::$app->session->setFlash('success', 'yeah beach');
            }
        }


        return $this->render('update',[
            'model' => $model,
        ]);
    }
}