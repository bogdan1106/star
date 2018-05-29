<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 19.04.2018
 * Time: 19:11
 */

namespace frontend\models;


use yii\base\Model;

class BookAddForm extends Model
{
    public $name;
    public $isbn;
    public $datePublished;
    public $publishedId;
}