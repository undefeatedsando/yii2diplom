<?php

/* @var $model frontend\widgets\StatusWidget */
 $tabs = ["profile", "service", "chats"];
 function isTabActive($tab, $active){
        if ($tab == $active){
            return "active";
        }
        else{
            return "";
        }
    }
?>
<div class="status gray">
    <div class="status-info">
          <img src="<?= Yii::getAlias('@web');?>/img/status/<?= $avatar; ?>" alt="" class="status-info-img">
      <div class="status-info-personal">
        <div class="status-info-personal-name"><?= $name; ?> <?= $family_name; ?></div>
        <div class="status-info-personal-city"><?= $city; ?></div>
      </div>
    </div>
    <div class="status-navbar">
        <a href="<?= $tabs[0] ?>" class="status-navbar-link <?= isTabActive($tabs[0], $active)?> ">Профиль</a>
        <a href="<?= $tabs[1] ?>" class="status-navbar-link <?= isTabActive($tabs[1], $active)?> ">Услуги</a>
        <a href="<?= $tabs[2] ?>" class="status-navbar-link <?= isTabActive($tabs[2], $active)?> ">Чаты</a>
    </div>
</div>