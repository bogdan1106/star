<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin();

echo $form->field($model, 'username');
echo $form->field($model, 'email');
echo $form->field($model, 'password')->passwordInput();

echo Html::submitButton('Add User', ['class' => 'btn btn-primary']);

ActiveForm::end();


?>