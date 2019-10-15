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
        if ($userJoinForm->load(Yii::$app->request->post()))
            if ($userJoinForm->validate()) {
                $userRecord = new UserRecord();
                $userRecord->setUserJoinForm($userJoinForm);
                $userRecord->save();
                return $this->redirect('/');

            }
        return $this->render('join', compact('userJoinForm'));
    }

    public function actionLogin()
    {
        if (Yii::$app->request->isPost)
            return $this->actionLoginPost();
        $userLoginForm = new UserLoginForm();
        return $this->render('login', compact('userLoginForm'));
    }

    private function actionLoginPost()
    {
        $userLoginForm = new UserLoginForm();
        if ($userLoginForm->load(Yii::$app->request->post()))
            if ($userLoginForm->validate()) {
                $userLoginForm->login();
                return $this->redirect('/');
            }
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