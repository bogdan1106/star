<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;


$names = ArrayHelper::getColumn($employers, 'city');

debug($names);


?>

