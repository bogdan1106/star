<?php
use yii\helpers\Url;


?>
<a href="<?php echo Url::to(['author/create']); ?>" class="btn btn-primary">Добавить автора</a><br><br>
<br>

<table class="table table-condensed">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    <?php foreach($authorList as $author): ?>

             <tr>
                 <td> <?php echo  $author->id?></td>
                 <td> <?php echo  $author->first_name?></td>
                 <td> <?php echo  $author->last_name?></td>
                 <td><a href="<?php  echo Url::to(['author/update', 'id' => $author->id]); ?>">Edit </a></td>
                 <td><a href="<?php  echo Url::to(['author/delete', 'id' => $author->id]); ?>">Delete </a></td>
             </tr>
    <?php   endforeach ?>

</table>

