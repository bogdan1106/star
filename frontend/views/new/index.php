<?php

use yii\helpers\url;


 foreach ($list as $data): ?>

  <h3>  <a href="<?= Url::to(['new/view', 'id' => $data['id']]); ?>"><?=$data['name_ru']?></a></h3>

<?php endforeach; ?>


<?php