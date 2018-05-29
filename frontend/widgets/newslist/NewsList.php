<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 19.03.2018
 * Time: 0:16
 */

namespace frontend\widgets\newslist;
use yii\base\Widget;
use frontend\models\Lis;
use Yii;
use Url;

class NewsList  extends Widget
{

   public $showLimit = null;
    public function run()
    {
        $max = Yii::$app->params['maxItemsOnIndexPage'];
        if ($this->showLimit) $max = $this->showLimit;


        $list = Lis::getLis($max);

        return $this->render('block', [
            'list' => $list,
            'max' => $max,
        ]);
    }
}