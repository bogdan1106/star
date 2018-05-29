<?php


namespace frontend\models;
use Yii;

use yii\base\Model;



class Lis extends Model
{
    public static function getLis($max)
    {
        $max = intval($max);
        $sql = 'SELECT id, name_ru, shot_text  FROM data LIMIT '. $max;

        $result =   Yii::$app->db->createCommand($sql)->queryAll();

        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['shot_text'] = Yii::$app->stringHelper->getShort($item['shot_text']);
            }
        }
        return $result;
    }


    public static function getItem($id)
    {
        $sql = $sql = "SELECT id, name_ru, shot_text  FROM data WHERE id = $id ";
        $result = Yii::$app->db->createCommand($sql)->queryOne();

        $result['shot_text'] = Yii::$app->stringHelper->getShort($result['shot_text']);
        return $result;


    }
}

