<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use frontend\assets\AppAsset;
AppAsset::register($this);
?>

<div class="news">
    <h3 class="news-header"><?= $header; ?></h3>
    <img src="img/news/<?= $img; ?>" alt="" class="news-img">
    <div class="news-text"><?= $text; ?></div>
</div>