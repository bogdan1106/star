<?php

use yii\helpers;
use yii\helpers\Html;
?>


<?php
$this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="UTF-8"/>
    </head>

<body>

<!--<div class="navbar navbar-inverse navbar-fixed-top">-->
<!--    <div class="container">-->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!--            <a href="/" class="navbar-brand">SMOTREE-ONLINE.COM</a>-->
<!--        </div>-->
<!--        <div class="navbar-collapse collapse">-->
<!--            <ul class="nav navbar-nav navbar-left list-color">-->
<!--                <li><a href="/genre/18/page-1">Мультфильмы</a></li>-->
<!--                <li><a href="/category/2/page-1">Фильмы</a></li>-->
<!--                <li><a href="/category/3/page-1">Сериалы</a></li>-->
<!--                <li><a href="/genre/22/page-1">ТВ-Шоу</a></li>-->
<!--            </ul>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div id="headerwrap">-->
<!--    <div class="container">-->
<!--        <div class="row centered">-->
<!--            <div class="col-lg-8 col-lg-offset-2">-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->




<?php $this->beginBody() ?>


<?php echo $content ?>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>

<?php $this->endBody() ?>
</body>

    </html>
<?php  $this->endPage() ?>