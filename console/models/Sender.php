<?php

namespace console\models;
use Yii;

class Sender
{
    public static function run($subscribers)
    {
        foreach ($subscribers as $subscriber) {
            $result =  Yii::$app->mailer->compose()
                ->setFrom('dorwo@yandex.ua')
                ->setTo($subscriber['email'])
                ->setSubject('Тема сообщения')
                ->setTextBody('Текст сообщения')
                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();
            var_dump($result);

        }


    }

}