<?php


use yii\widgets\ActiveForm;
use yii\helpers\Html;


if($model->hasErrors()) {
    debug($model->getErrors());
}



?>


<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'first_name'); ?>
<?php echo $form->field($model, 'last_name'); ?>
<?php echo $form->field($model, 'birthdate')->textInput()->hint('Введите дату в формате 1900-01-26'); ?>
<?php echo $form->field($model, 'rating'); ?>

<?php echo Html::submitButton('go', ['class' => 'btn btn-primary']) ; ?>

<?php  ActiveForm::end(); ?>


<?= '<br><br>'. $a ?>

