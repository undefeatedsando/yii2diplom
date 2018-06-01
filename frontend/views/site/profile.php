<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ресурсный центр для дизайнеров</title>
    <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
       <!-- Main layout -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web');?>/css/profile.css">
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet'>
</head>
<body>

  
  <section id="menu">
    <nav>
      <div class="top-menu">
        <a href="#">Василий</a>
        <a href="#">Петрович</a>
        <a href="#">Личный кабинет</a>
      </div>
    </nav>
  </section>
  <section id="status">
    <div class="status gray">
      <div class="status-info">
          <img src="../img/status/img3.PNG" alt="" class="status-info-img">
        <div class="status-info-personal">
        <div class="status-info-personal-name">Елена Петрова</div>
        <div class="status-info-personal-city">Подольск</div>
      </div>
      </div>
      <div class="status-navbar">
        <a href="" class="status-navbar-link active">Профиль</a>
        <a href="services.html" class="status-navbar-link">Услуги</a>
        <a href="chats.html" class="status-navbar-link">Чаты</a>
      </div>
    </div>
  </section>
  <section id="content">
      
<form class="form-default-style" action="" method="post">
  <div class="block" style="width: 50%">
    <input type="text" spellcheck="false" name="field1" value="Елена" required="true" />
    <input type="text" spellcheck="false" name="field2" value="Васильевна" required="true" />
    <input type="text" spellcheck="false" name="field3" value="Петрова" required="true" />
    <input type="text" spellcheck="false" name="field3" value="www.mywebsite.com" required="true" />
    <label>
     <span>Город:</span>
      <select>
      <option>Москва</option>
      <option>Немосква</option>
      </select>
    </label>
    <label for="a">
      <span>О себе</span>
      <textarea name="" id="a" cols="30" rows="10"></textarea>
    </label>
  </div>
  <div class="block flex-vertical-sparnd">
    <div class="image-placeholder grey">
      <img src="../img/status/img3.PNG" alt="" class="image-placeholder__img" id="output">
      <div class="image-placeholder__edit-button">
      <span class="glyphicon glyphicon-pencil"></span>
      </div>
    </div>
    <input type="file" name="" id="imgInput" accept="image/*" onchange="loadFile(event)">
<!--    <label class="image-placeholder__edit-button">
           q
            <input type="file" name="" id="">
            <span class="glyphicon glyphicon-pencil"></span>
    </label>-->
    <span>&nbsp;</span>
    <input type="submit" value="Обновить данные" class="button__red"/>
  </div>
</form>
    
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