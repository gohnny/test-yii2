<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\mail\MessageInterface;
use yii\web\View;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Nav;
use yii\widgets\Breadcrumbs;

/* @var $this View view component instance */
/* @var $message MessageInterface the message being composed */
/* @var $content string main view render result */
?>
<?php AppAsset::register($this); ?>
<?php $this->beginPage() ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <?php $this->head() ?>
    <body>
    <?php $this->beginBody() ?>
    <!-- navbar -->
    <?php
    NavBar::begin([
        'id' => 'nav',
        'brandLabel' => 'Home',
        'brandUrl' => Yii::$app->homeUrl,
        'brandOptions' => ['class' => 'navbar-brand'],
        'renderInnerContainer' => false,
        // 'innerContainerOptions' =>['class'=>'navbar navbar-expand-lg fixed-top'],
        'options' => ['class' => 'navbar navbar-expand-lg fixed-top'],

    ]);
    if (Yii::$app->user->isGuest)
        $menu = [
            ['label' => 'Join', 'url' => ['user/join']],
            ['label' => 'Login', 'url' => ['user/login']],
            ['label' => 'Contact', 'url' => ['site/feedback-form']],
        ];
    else
        $menu = [
            ['label' => 'Contact', 'url' => ['site/feedback-form']],
            ['label' => Yii::$app->user->getIdentity()->name],
            ['label' => 'Logout', 'url' => ['user/logout']],
        ];
    echo Nav::widget([
        'options' => [
            'class' => 'navbar-nav mr-4',
        ],
        'items' => $menu
    ]);
    NavBar::end();
    ?>
    <!--Breadcrumbs   -->
    <? //=
    ////    Breadcrumbs::widget([
    ////        'itemTemplate' => "<li class='breadcrumb-item'>{link}</li>\n",
    ////        'homeLink' => false,
    ////        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ////    ])
    ////    ?>
    <?= $content ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>