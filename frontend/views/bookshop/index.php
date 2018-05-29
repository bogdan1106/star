<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

    <a href="<?php echo Url::to(['create'])?>" class="btn btn-primary">Создать Книгу</a>




<?php
foreach ($booklist as $book){

    echo '<h3>' . $book->name. '<br></h3>';
   // echo $book->getDataPublished().'<br>';
    echo $book->getDatePublished().'<br>';
    echo $book->getPublisherName().'<br><br>';
    $book->getAuthorsFullName();
    echo '<hr>';
}

