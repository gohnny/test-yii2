<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Alert;
use yii\captcha\Captcha;
use yii\helpers\Html;

?>
<div class="contact-form"
<div class="row margin-null">
    <h1>Login</h1>

    <?php //if (Yii::$app->session->hasFlash('contactFormSubmitted')):
    //    echo Alert::widget([
    //        'options' => [
    //            'class' => 'alert alert-success col-lg-6 col-md-3 col-sm-15 '],
    //        'body' => '<b>Thank you!</b>Your message has been sent.',
    //        'closeButton' => false
    //    ]);; ?>
    <!---->
    <?php //else: ?>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form', /* Идентификатор формы */
        'options' => ['class' => 'container'], /* класс формы */
        'fieldConfig' => [ /* классы полей формы */
            'template' => "<div class=\"col-lg-3\">{label}</div>\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-10 invalid-feedback d-block\">{error}</div>"
        ],
    ]); ?>
    <?= $form->field($userLoginForm, 'email') ?>
    <?= $form->field($userLoginForm, 'password') ?>
    <?= $form->field($userLoginForm, 'verifyCode')->widget(Captcha::className(), [
        'captchaAction' => '/site/captcha',
        'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-7">{input}</div></div>',
    ]) ?>
    <div class="form-group">
        <?= Html::submitButton('Log in', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
</div>
</article>