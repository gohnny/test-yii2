<?php

namespace app\controllers;

use app\models\ContactForm;
use yii\web\Controller;
use Yii;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSeemore()
    {
        return $this->render('seemore');
    }

    public function actionFeedbackForm()

    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['emailto'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
            /* иначе выводим форму обратной связи */
        } else {
            return $this->render('feedbackForm', [
                'model' => $model,
            ]);
        }
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
