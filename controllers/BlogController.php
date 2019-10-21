<?php

namespace app\controllers;

use yii\web\Controller;

class BlogController extends Controller
{
    public function actionRbacBlog()
    {
        return $this->render('rbac-blog');
    }

    public function actionDockerBlog()
    {
        return $this->render('docker-blog');
    }

    public function actionActiverecordBlog()
    {
        return $this->render('activerecord-blog');
    }
}
