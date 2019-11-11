<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\BlogRecord;
use yii\web\NotFoundHttpException;

class BlogController extends Controller
{
    public function actionBlog($slug)
    {
        return $this->render('blog', [
            'blog' => $this->findBlogBySlug($slug),
        ]);
    }

    protected function findBlogBySlug($slug)
    {

        if (($blog = BlogRecord::findOne(['slug' => $slug])) !== null) {
            return $blog;
        } else {
            throw new NotFoundHttpException('Blog not found');
        }
    }
}
