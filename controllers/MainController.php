<?php


namespace app\controllers;


class MainController extends AppController
{
    public function actions()
    {
        return [
            '404' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionBlog()
    {
        return $this->render('blog');
    }
}