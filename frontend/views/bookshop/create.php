<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;



?>

<?php $form = ActiveForm::begin(); ?>
<?php echo $form->field($book, 'name')->label('Имя')?>
<?php echo $form->field($book, 'isbn') ?>
<?php echo $form->field($book, 'date_published') ?>
<?php echo $form->field($book, 'publisher_id')->dropDownList($publishers) ?>

<?php echo Html::submitButton('Поехали'); ?>
<?php ActiveForm::end(); ?>


