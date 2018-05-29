
<?php
use yii\helpers\Url;
foreach ($list as $data): ?>

    <h3>  <a href="<?= Url::to(['new/view', 'id' => $data['id']]); ?>"><?=$data['name_ru']?></a></h3><br>
    <h4><?=$data['shot_text']?></h4><br>
<?php endforeach; ?>