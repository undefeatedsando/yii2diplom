<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use app\assets\LightAsset;
LightAsset::register($this);
?>


<div class="coupon-card">
          <div class="coupon-card__icon <?= $type; ?>"></div>
          <div class="coupon-card__description">
                <h3 class="coupon-card__description__header"><?= $header; ?></h3>
                <div class="coupon-card__description__text"><?= $option; ?>
                <br>
<?php if ($full): ?>
                по промокоду <strong>"<?= $promo; ?>"</strong>
                <br>
                Тел.: <?= $phone; ?>
                <br>
                Адрес: <?= $address; ?>
<?php else: ?>
          для обладателей подписки.
<?php endif ?>
                </div>
          </div>
</div>