<?php
if ($model->hasErrors()) {

    debug($model->getErrors());
}


?>

<form action="" method="post" xmlns="http://www.w3.org/1999/html">

   <p>Дата рождения в формате - 1980-01-26: </p>  <input type="text" name="birthDate"  /> <br><br>
    <p>Дата начала работы - 2015-15-01: </p>  <input type="text" name="startWorkData"  />
    <p>Город:</p>  <input type="text" name="city"  />
    <p>Должность:</p>  <input type="text" name="position"  />
    <p>Код:</p>  <input type="text" name="identifityCode"  />





    <br><br>
    <input type="submit" />



</form>
<br><br>


