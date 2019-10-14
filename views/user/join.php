<?php

//use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Alert;
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
            <?= Html::submitButton('Register', ['class' => 'btn btn-secondary btn-block', 'name' => 'contact-button',]) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

<!--        <form>-->
<!--            <div class="row">-->
<!--                <div class="col-lg-4 col-md-4 col-sm-12">-->
<!--                    <h1>Register Form</h1>-->
<!--                </div>-->
<!--                <div class="col-lg-8 col-md-8 col-sm-12 right">-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com"-->
<!--                               name="email">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control form-control-lg" placeholder="Password" password="">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control form-control-lg" placeholder="password2" password2="">-->
<!--                    </div>-->
<!---->
<!--                    <input type="submit" class="btn btn-secondary btn-block" value="Register" name="">-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->