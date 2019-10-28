<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\BlogRecord;
use yii\web\HttpException;

class BlogController extends Controller
{
    public function actionBlog()
    {
        $id = Yii::$app->request->get('id');
        $blog = BlogRecord::findOne($id);
        if (empty($blog)) throw new HttpException(404, 'Такой страницы не существует');

        return $this->render('blog', compact('blog'));
    }
}
