<?php


use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="contact-form" id="contact">
    <div class="container">
        <h1>Register Form</h1>
        <?php $form = ActiveForm::begin([
            'id' => 'join-form',
            'options' => ['class' => 'container'],
            'fieldConfig' => [
                'template' => "<div class=\"col-lg-3\">{label}</div>\n
                           <div class=\"col-lg-6\">{input}</div>
                           \n<div class=\"col-lg-10 invalid-feedback d-block\">{error}</div>"]
        ]) ?>
        <?php echo $form->field($userJoinForm, 'name') ?>
        <?php echo $form->field($userJoinForm, 'email') ?>
        <?php echo $form->field($userJoinForm, 'password') ?>
        <?php echo $form->field($userJoinForm, 'confirm_password') ?>
        <?= $form->field($userJoinForm, 'verifyCode')->widget(Captcha::className(), [
            'captchaAction' => '/user/captcha',
            'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-7">{input}</div></div>',
        ]) ?>
        <div class="form-group">
            <?= Html::submitButton('Register', ['class' => 'btn btn-success', 'name' => 'join-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
