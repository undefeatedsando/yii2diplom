<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use frontend\components\newsWidget;
use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ресурсный центр для дизайнеров</title>
    <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
       <!-- Main layout -->
  <link rel="stylesheet" href="css/main_layout.css">
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet'>
</head>
<body>
<section>
<div class="wrapper-top">
  <div id="menu" class="grid-wrapper">
    <div class="item dark-blue"><h3>Организация мероприятий</h3></div>
    <div class="item grey"><h2>Налоговый учет</h2></div>
    <div class="item blue"><h2>Договора<br>Справки<br>Выписки</h2></div>
    <div class="item red"><h2>Расчет проектов</h2></div>
    <div class="item dark-blue"><h2>Поставщики</h2></div>
    <div class="item grey"></div>
    <div class="item blue"><h3>Экспертиза<br>Оценка<br>Качество</h3></div>
    <div class="item grey"><h2>Льготы и субсидии</h2></div>
    <div class="item dark-blue"><h2>Фабрики</h2></div>
    <div class="item dark-blue"><h2>Реклама<br>Продвижение</h2></div>
    <div class="item red"><h3>Привлечение инвестиций</h3></div>
    <div class="item grey"><h3>Поддержка международного бизнеса</h3></div>
  </div>
    
<div class="carousel-and-buttons">

    <?php if (Yii::$app->user->isGuest) {?>
 <div class="button-main red" onclick='location = ("site/signup")'>Регистрация</div>
 <div class="button-main blue" onclick='location = ("site/login")'>Войти</div>
    <?php } else {?>
 <div class="button-main red" onclick='location = ("profile")'>Профиль</div>
     <?= Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выйти из аккаунта ' . Yii::$app->user->identity->username,
                ['class' => 'button-main blue']
            )
            . Html::endForm()?>
  <?php }?>
  <div id="designer-carousel" class="carousel slide lighter-bg" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#designer-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#designer-carousel" data-slide-to="1"></li>
    <li data-target="#designer-carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <img src="img/news/1.jpg" alt="" class="designer-carousel__img">
     <div class="designer-carousel__name">Петрова Василиса</div>
     <a href="" class="designer-carousel__href">Сайт</a>
    </div>

    <div class="item">
        <img src="img/news/2.jpg" alt="" class="designer-carousel__img">
     <div class="designer-carousel__name">Сидорова Ирина</div>
     <a href="" class="designer-carousel__href">Сайт</a>
    </div>

    <div class="item">
      <img src="img/news/3.jpg" alt="" class="designer-carousel__img">
     <div class="designer-carousel__name">Алинова Алина</div>
     <a href="" class="designer-carousel__href">Сайт</a>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#designer-carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#designer-carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

</div>

   
</section>
     <?php
     /*$addr = "1.jpg";
     $carousel = [
 [
 'content' => '<img src="../img/news/1.jpg"/>',
 'caption' => '<h1>'.$addr.'</h1><p>Какой-то дополнительный текст</p><p><a href="/article/link/1" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
 'options' => []
 ],
 [
 'content' => '<img src="../img/news/2.jpg"/>',
 'caption' => '',
 'options' => []
 ],
 [
 'content' => '<img src="../img/news/3.jpg"/>',
 'caption' => '',
 'options' => ['class' => 'my-class']
 ]
];

echo Carousel::widget([
 'items' => $carousel,
 'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
 'controls' => [
 '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
 '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
 ]
]);
     
     */?>
    <section>
        
    </section>  
   
<section class="wrapper-bottom" id="news">
    <h1 class="section-header text-center">Дизайнеры месяца</h1>
     <div class="coontainer dark-blue">
      <?= newsWidget::widget(
                [
                'img' => "1.jpg",
                'header' => "Заголовок новости",
                'text' => "Тут какой-то очень очень важный текст-описание"
                ]
                ) ?>
      <div class="news">
       <h3 class="news-header">Дизайнер Елена</h3>
       <img src="img/news/1.jpg" alt="" class="news-img">
        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique illo reprehenderit, quis   obcaecati. Praesentium, totam consequuntur nesciunt, expedita et possimus necessitatibus nulla iusto, atque distinctio   placeat hic eum voluptatibus dicta voluptas molestias? Quos corporis excepturi, inventore atque omnis, aliquam   exercitationem. Cumque vel minus labore suscipit quas repellat officia. Optio facere, doloremque totam expedita et   iure ipsum blanditiis vitae cum aliquam fugit quibusdam molestias, commodi eum maiores adipisci odit! Enim aut   recusandae sint harum omnis soluta dolores in. </div>
      </div>
      <div class="news">
       <h3 class="news-header">Дизайнер Елена</h3>
       <img src="img/news/2.jpg" alt="" class="news-img">
        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique illo reprehenderit, quis   obcaecati. Praesentium, totam consequuntur nesciunt, expedita et possimus necessitatibus nulla iusto, atque distinctio   placeat hic eum voluptatibus dicta voluptas molestias? Quos corporis excepturi, inventore atque omnis, aliquam   exercitationem. Cumque vel minus labore suscipit quas repellat officia. Optio facere, doloremque totam expedita et   iure ipsum blanditiis vitae cum aliquam fugit quibusdam molestias, commodi eum maiores adipisci odit! Enim aut   recusandae sint harum omnis soluta dolores in. </div>
      </div>
    </div>     
  </section>
  <section class="wrapper-bottom" id="footer">
    <div class="footer">
       <ul class="footer-list">
        <li class="footer-list-points">Цены</li>
        <li class="footer-list-points">Контакты</li>
        <li class="footer-list-points">Сотрудничество</li>
      </ul>
      <ul class="footer-list">
        <li class="footer-list-points">О сайте</li>
        <li class="footer-list-points">Правила</li>
        <li class="footer-list-points">Политика конфиденциальности</li>
      </ul>
    </div>
  </section>
<script src="/yii2/fromGit/web/assets/d559a2a9/jquery.js"></script>
<script src="/yii2/fromGit/web/assets/6f9f18c5/js/bootstrap.js"></script>
