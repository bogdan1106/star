<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 23.04.2018
 * Time: 23:45
 */

namespace frontend\models\shop;


use yii\base\Model;
use yii\widgets\ActiveForm;

class ProductForm extends Model
{
    public $name;
    public $description;
    public $category_id;
}