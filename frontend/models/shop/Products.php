<?php

namespace frontend\models\shop;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property string $description
 * @property int $category_id
 */
class Products extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    public function rules()
    {
        return ([
            [['name'], 'required'],
            [['name'], 'string', 'min' => '5'],

        ]);
    }


    public function getAllNames()
    {
       // return $allNames = $this->find('name')->where('id > 1')->all();
        return $allNames = $this->findOne(['id' => '3']);
    }

}
