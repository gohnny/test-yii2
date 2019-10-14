<?php

use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;

?>
<div class="contact-form" id="contact">
    <div class="container">
    <h1>Login</h1>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form', /* Идентификатор формы */
            'options' => ['class' => 'container'], /* класс формы */
            'fieldConfig' => [ /* классы полей формы */
                'template' => "<div class=\"col-lg-3\">{label}</div>\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-10 invalid-feedback d-block\">{error}</div>"
            ],
        ]); ?>
        <?= $form->field($userLoginForm, 'email') ?>
        <?= $form->field($userLoginForm, 'password')->passwordInput() ?>
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
