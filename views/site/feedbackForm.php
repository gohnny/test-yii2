<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
use yii\bootstrap4\Alert;

?>

<div class="contact-form" id="contact">
    <div class="container">
        <h1>Contact form</h1>
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')):
        echo Alert::widget([
            'options' => [
                'class' => 'alert alert-success col-lg-6 col-md-3 col-sm-15 '],
            'body' => '<b>Thank you!</b>Your message has been sent.',
            'closeButton' => false
        ]);; ?>

    <?php else: ?>

        <?php $form = ActiveForm::begin([
            'id' => 'contact-form',
            'options' => ['class' => 'container'],
            'fieldConfig' => [
                'template' => "<div class=\"col-lg-3\">{label}</div>\n<div class=\"col-lg-6\">{input}</div>\n
                               <div class=\"col-lg-10 invalid-feedback d-block\">{error}</div>"
            ]
        ]); ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'subject') ?>
        <?= $form->field($model, 'body')->textArea(['rows' => 4]) ?>
        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
            'captchaAction' => '/site/captcha',
            'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-7">{input}</div></div>',
        ]) ?>
        <div class="form-group">
            <?= Html::submitButton('Send', ['class' => 'btn btn-success', 'name' => 'contact-button',]) ?>
        </div>
        <?php ActiveForm::end(); ?>
    <?php endif; ?>
</div>
</div>
