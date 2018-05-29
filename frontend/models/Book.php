<?php
/**
 * Created by PhpStorm.
 * User: sir
 * Date: 18.04.2018
 * Time: 18:44
 */

namespace frontend\models;

use yii\db\ActiveRecord;
use yii\filters\auth\AuthMethod;

class Book extends ActiveRecord
{
    public static function tableName()
    {
        return 'book';
    }

    public function rules()
    {
        return [
         [['name', 'publisher_id'], 'required'],
        ];
    }


    public function getDatePublished()
    {
        return  ($this->date_published)? \Yii::$app->formatter->asDate( $this->date_published) : 'Дата не указана' ;
    }


    public function getPublisher()
    {
        return   $publisher =  $this->hasOne(Publisher::className(), ['id' => 'publisher_id'])->one();
    }


    public function getPublisherName()
    {
      if  ($publisher = $this->getPublisher()) {
          return $publisher->name;
      }
        return 'Нет издателя';
    }


    public function getBookToAuthorRelations()
    {
        return $this->hasMany(BookToAuthor::className(), ['book_id' => 'id']);
    }


    public function getAuthors()
    {
        return $this->hasMany(Author::className(), ['id' => 'author_id'])->via('bookToAuthorRelations')->all();
    }



    public function getAuthorsFullName()
    {

        $fullName = $this->getAuthors();


      print_r($fullName);
        foreach ($fullName as $name){
            echo $name->first_name . ' ' . $name->last_name . '<br>';
        }
    }



}