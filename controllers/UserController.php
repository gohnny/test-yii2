<?php

namespace app\controllers;

use app\models\UserIdentity;
use app\models\UserJoinForm;
use app\models\UserLoginForm;
use app\models\UserRecord;
use http\Url;
use Yii;
use yii\web\Controller;

class  UserController extends Controller
{
    public function actionJoin()
    {
        if (Yii::$app->request->isPost)
            return $this->actionJoinPost();
        $userJoinForm = new UserJoinForm();
        return $this->render('join', compact('userJoinForm'));
    }

    public function actionJoinPost()
    {
        $userJoinForm = new UserJoinForm();
        $userJoinForm->load(Yii::$app->request->post());
        return $this->render('join', compact('userJoinForm'));
    }

    public function actionLogin()
    {

        $userLoginForm = new UserLoginForm();
        // $uid = UserIdentity::findIdentity(3);
        // \Yii::$app->user->login($uid);
        return $this->render('login', compact('userLoginForm'));
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('/');
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_DEBUG ? 'testme' : null,
            ],
        ];
    }
}