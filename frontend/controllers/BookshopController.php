<?php

namespace frontend\controllers;

use frontend\models\Book;
use frontend\models\Publisher;
use yii\web\Controller;
use Yii;


class BookshopController extends Controller
{

    public function actionIndex()
    {
        $conditions = ['publisher_id' => '1'];
        $booklist = Book::find()->orderBy(['id' => SORT_DESC])->limit(20)->all();
        return $this->render('index', [
            'booklist' => $booklist,
        ]);
    }

    public function actionCreate()
    {
        $book = new Book();
        $publishers = Publisher::getList();
        if ($book->load(Yii::$app->request->post()) && $book->save())
        {
            Yii::$app->session->setFlash('success', 'yoman');
            return $this->refresh();
        }

        return $this->render('create', [
            'book' => $book,
            'publishers' => $publishers,

        ]);
    }

}
