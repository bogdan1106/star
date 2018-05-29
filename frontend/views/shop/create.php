<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;



if ($camera->hasErrors()) {

    debug($camera->getErrors());
}

echo 'chemo <br>';
echo $camera->name . '<br>';



$form =  ActiveForm::begin();
echo $form->field($camera, 'name');
echo $form->field($camera, 'price');
echo $form->field($camera, 'description');
echo $form->field($camera, 'category_id');
echo Html::submitButton('Go', ['class' => 'btn btn-primary']);

ActiveForm::end();

$allNames = $camera->getAllNames();

debug($allNames);