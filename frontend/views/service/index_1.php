<?php

/* @var $this yii\frontend\web\View */
/* @var $model frontend\models\Userdata */
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ресурсный центр для дизайнеров</title>
    <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
       <!-- Main layout -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web');?>/css/services.css">
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet'>
</head>
<body>

  
  <section id="menu">
        <div class="top-menu">
        <a href="#">Василий</a>
        <a href="#">Петрович</a>
        <a href="#">Личный кабинет</a>
        </div>
  </section>
  <section id="status">
    <div class="status gray">
      <div class="status-info">
          <img src="img/status/img3.PNG" alt="" class="status-info-img">
        <div class="status-info-personal">
        <div class="status-info-personal-name">Елена Петрова</div>
        <div class="status-info-personal-city">Подольск</div>
      </div>
      </div>
      <div class="status-navbar">
        <a href="profile.html" class="status-navbar-link">Профиль</a>
        <a href="services.html" class="status-navbar-link">Услуги</a>
        <a href="" class="status-navbar-link active">Чаты</a>
      </div>
    </div>
  </section>
  <section id="content">
       <div class="wrapper with-margins">
         <input type="submit" class="button__yellow" value="Открыть базу 1С">
       </div>
       <div class="wrapper">
    <div class="checkboxes">
    <div class="checkboxes__header">Фильтр услуг</div>
     <form action="">
        <div class="checkboxes__list">
          <label class="container">Тысяча чертей
            <input type="checkbox" checked="true">
            <span class="checkmark"></span>
          </label>
          <label class="container">Two
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>       
        </div>
        </form>
      </div>
    <div class="result">
        <div class="coupon-card">
          <div class="coupon-card__icon project"></div>
          <div class="coupon-card__description">
            <h3 class="coupon-card__description__header">This is card and it has owerflowing heading</h3>
            <div class="coupon-card__description__text">It has some description here</div>
          </div>
        </div>
        <div class="coupon-card">
          <div class="coupon-card__icon supply"></div>
          <div class="coupon-card__description">
            <h3 class="coupon-card__description__header">This is card</h3>
            <div class="coupon-card__description__text">It has some description here</div>
          </div>
        </div>
        <div class="coupon-card">
          <div class="coupon-card__icon grade"></div>
          <div class="coupon-card__description">
            <h3 class="coupon-card__description__header">This is card</h3>
            <div class="coupon-card__description__text">It has some description here</div>
          </div>
        </div>
        <div class="coupon-card">
          <div class="coupon-card__icon global"></div>
          <div class="coupon-card__description">
            <h3 class="coupon-card__description__header">This is card</h3>
            <div class="coupon-card__description__text">It has some description here</div>
          </div>
        </div>
		<div class="coupon-card">
          <div class="coupon-card__icon project"></div>
          <div class="coupon-card__description">
            <h3 class="coupon-card__description__header">This is card and it has owerflowing heading</h3>
            <div class="coupon-card__description__text">It has some description here</div>
          </div>
        </div>
        
        <div class="coupon-card">
          <div class="coupon-card__icon grade"></div>
          <div class="coupon-card__description">
            <h3 class="coupon-card__description__header">This is card</h3>
            <div class="coupon-card__description__text">It has some description here</div>
          </div>
        </div>
        <div class="coupon-card">
          <div class="coupon-card__icon global"></div>
          <div class="coupon-card__description">
            <h3 class="coupon-card__description__header">This is card</h3>
            <div class="coupon-card__description__text">It has some description here</div>
          </div>
        </div>
    </div>     
   </div>
  </section>
  <section id="footer">  
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
  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  
  <!--Жизни не мыслю без шаблонизаторов-->
  <script src="js/vue.min.js"></script>
  <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
  </script>  
</body>
</html>