<?php

namespace frontend\models\shop;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "production".
 *
 * @property int $id
 * @property string $name
 */
class Production extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'production';
    }


}
