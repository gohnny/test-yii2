<?php

use yii\helpers\Url;

?>
<header class="header">
    <div class="overlay"></div>
    <div class="description">
        <h1> Hello ,Welcome To My official Website
            <p> Hi, my name is Sergey and I am a beginner web developer. Where do I see myself in web development?
            <p>I answer: my soul with the backend.
                I make efforts to master modern frameworks and technologies. When developing this site, I used the
                following technologies
            </p>
            <!--            <button class="btn btn-outline-secondary btn-lg">See more</button>-->
            <a href="<?= Yii::$app->getUrlManager()->createUrl(['site/seemore']); ?>"
               class="btn btn-secondary btn-lg">See more</a>
        </h1>
    </div>
</header>
<!-- Контент страницы -->

<div class="about" id="about"></div>
<div class="row about">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <img src="images/team/team-3.jpg" class="img-fluid">
        <span class="text-justify">S.Web Developer</span>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 desc">

        <h3>
            Author's notes</h3>
        <p>
            This project implemented:
            User registration with validation of field filling
            as well as checking for a repeated email.
            Authorization of users with validation of fields.
            Database Migration
            Bootstrap4 Yii2 Menu
        </p>
    </div>
</div>
<hr>
<!-- portfolio -->
<div class="portfolio" id="portfolio"></div>
<div class="portfolio">
    <h1 class="text-center">Technologies which i use in my project</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/technologies/php2_cr.jpg" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/technologies/yii2_cr.jpg" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/technologies/Mysql.png" class="img-fluid">
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/technologies/git.png" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/technologies/composer_cr.jpg" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/technologies/Linux_cr.jpg" class="img-fluid">
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/technologies/html_cr.png" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/technologies/css_cr.jpg" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/technologies/bootstrap.png" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- Posts section -->
<div class="blog" id="blog">
    <div class="blog">
        <div class="container">
            <h1 class="text-center">Blog</h1>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/posts/1st blog.jpeg" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Active Record</h4>
                            <p class="card-text">
                                Сборник методов для формирования запросов к БД в yii2.
                                Здесь я привел список с функциями
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="<?= Url::to(['/blog/blog', 'slug' => 'osnovu-doker']) ?>"
                               class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/posts/2nd blog.jpeg" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Основы Docker за Х часов и Y дней</h4>
                            <p class="card-text">
                                Цель данной статьи собрать в небольшую кучку основную информацию,
                                минимально
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="<?= Url::to(['/blog/blog', 'slug' => 'formirovanie-zaprosov-dlya-vuborki']) ?>"
                               class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/posts/3rd blog.jpg" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">RBAC - это просто!</h4>
                            <p class="card-text">
                                В этом посте я постараюсь понятно объяснить как настроить RBAC в Yii2.
                                Напомню, RBAC - Role Based Access Control
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="<?= Url::to(['/blog/blog', 'slug' => 'rbac-eto-prosto']) ?>"
                               class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



