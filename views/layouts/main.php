<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\mail\MessageInterface;
use yii\web\View;
use yii\helpers\Url;

/* @var $this View view component instance */
/* @var $message MessageInterface the message being composed */
/* @var $content string main view render result */
?>
<?php AppAsset::register($this); ?>
<?php $this->beginPage() ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>"/>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top ">
        <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="#">About</a></li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="#">Portfolio</a></li>
                <li class="nav-item">
                    <a class="nav-link " data-value="blog" href="#">Blog</a></li>
                <li class="nav-item">
                    <a class="nav-link " data-value="contact"
                       href="<?= Yii::$app->urlManager->createUrl(['site/feedback-form']) ?>">Contact</a></li>
                <li class="nav-item">
                    <a class="nav-link " data-value="join"
                       href="<?= Yii::$app->urlManager->createUrl(['user/join']) ?>">Join</a></li>
                <li class="nav-item">
                    <a class="nav-link " data-value="login"
                       href="<?= Yii::$app->urlManager->createUrl(['user/login']) ?>">Login</a></li>
            </ul>
        </div>
    </nav>
    <?= $content ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>