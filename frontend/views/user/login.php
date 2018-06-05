

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;


echo Yii::$app->user->identity->username;
echo '<br>';
echo '<br>';
echo Html::a('logout', ['user/logout']);
echo '<br>';
echo '<br>';
$form = ActiveForm::begin();

echo $form->field($model, 'username');
echo $form->field($model, 'password')->passwordInput();
echo Html::submitButton('login', ['class' => 'btn btn-primary']);

ActiveForm::end();