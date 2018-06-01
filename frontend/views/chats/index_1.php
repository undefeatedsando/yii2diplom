<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ресурсный центр для дизайнеров</title>
    <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
       <!-- Main layout -->
  <link rel="stylesheet" href="css/chats.css">
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet'>
</head>
<body>

<section class="wrapper" id="menu">
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
      <div class="chat">
        <div class="chat-card active">
          <div class="chat-card__icon"></div>
          <div class="chat-card__description">Связаться с
            <div class="chat-card__description__specialist">бухгалтером</div>
          </div>
        </div>
        <div class="chat-card">
          <div class="chat-card__icon"></div>
          <div class="chat-card__description">Связаться с
            <div class="chat-card__description__specialist">кадровиком</div>
          </div>
        </div>
        <div class="chat-card">
          <div class="chat-card__icon"></div>
          <div class="chat-card__description">Связаться с
            <div class="chat-card__description__specialist">юристом</div>
          </div>
        </div>
      </div>
      <div class="active-chat"></div>
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
</body>
</html>
