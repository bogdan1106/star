<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

if($model->hasErrors()) {
    debug($model->getErrors());
}
?>

<?php  $form = ActiveForm::begin();  ?>

    <?php echo $form->field($model, 'firstName'); ?>
    <?php echo $form->field($model, 'lastName');?>
    <?php echo $form->field($model, 'middleName');?>
    <?php echo $form->field($model, 'email');?>
    <?php echo $form->field($model, 'birthDate');?>
    <?php echo $form->field($model, 'hiringDate');?>
    <?php echo $form->field($model, 'position');?>
    <?php echo $form->field($model, 'idCode');?>
<?php echo $form->field($model, 'idCode')->dropDownList($model->getCitiesList());?>
<?php echo  Html::submitButton('Отправить',[ 'class' => 'btn btn-primary']);?>

<?php  $form = ActiveForm::end();  ?>


