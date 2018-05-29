<?php

use yii\web\View;


$this->title = 'Register mail';


if ($model->hasErrors()) {

    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';


}
?>



<form action="" method="post">
    <input type="text" name="email" />
    <br> <br>
    <input type="submit"/>

</form>

