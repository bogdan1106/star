<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;



?>

<div class="row">
    <div class="col-lg-5">

<?php $form = ActiveForm::begin(); ?>

<?=  $form->field($model, 'username')->textInput(['autofocus' => true]); ?>
<?=  $form->field($model, 'email');?>
<?=  $form->field($model, 'password')->passwordInput();?>

<?= Html::submitButton('Signup', ['class' => 'btn btn-primary']);?>
<?php $form = ActiveForm::end(); ?>
    </div>

</div>
