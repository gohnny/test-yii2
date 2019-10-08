<?php

namespace app\controllers;

use app\models\UserLoginForm;
use yii\web\Controller;

class  UserController extends Controller
{
    public function actionJoin()
    {
        return $this->render('join');
    }

    public function actionLogin()
    {
        $userLoginForm = new UserLoginForm();
        return $this->render('login', compact('userLoginForm'));
    }
}