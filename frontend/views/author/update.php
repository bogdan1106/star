<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;




?>


<?php $form = ActiveForm::begin();  ?>
    <?php echo  $form->field($model, 'first_name')?>
    <?php echo $form->field($model, 'last_name')?>
    <?php echo $form->field($model, 'birthdate')?>
    <?php echo $form->field($model, 'rating')?>

<?php echo Html::submitButton('Go', ['class' => 'btn btn-primary'])  ?>


<?php ActiveForm::end();  ?>

<p>





</p>