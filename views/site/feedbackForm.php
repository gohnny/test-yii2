<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

?>

<?php
$this->title = 'Contact Form';
?>
<div class="contact-form"
<div class="row margin-null">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
        <div class="alert alert-success col-lg-6 col-md-3 col-sm-15 ">
            Спасибо за обращение к нам. Мы постараемся ответить вам как можно скорее.
        </div>

    <?php else: ?>

        <?php $form = ActiveForm::begin([
            'id' => 'contact-form', /* Идентификатор формы */
            'options' => ['class' => 'container'], /* класс формы */
            'fieldConfig' => [ /* классы полей формы */
                'template' => "<div class=\"col-lg-3\">{label}</div>\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-10 invalid-feedback d-block\">{error}</div>"
            ],
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
            <?= Html::submitButton('Send', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    <?php endif; ?>
</div>
</div>
</article>