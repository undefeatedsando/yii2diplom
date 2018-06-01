<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\widgets;

use yii\base\Widget;


class FooterWidgetNV extends Widget{
    
    public $references = [
        ["Цены", "#"],
        ["Контакты", "#"],
        ["Сотрудничество", "#"],
        ["О сайте", "#"],
        ["Правила", "#"],
        ["Политика конфиденциальности", "#"],
        
    ];
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        return '
    <div class="footer">
       <ul class="footer-list">
        <li class="footer-list-points"><a href="' . $this->references[0][1] . '">' . $this->references[0][0] . '</a></li>
        <li class="footer-list-points"><a href="' . $this->references[1][1] . '">' . $this->references[1][0] . '</a></li>
        <li class="footer-list-points"><a href="' . $this->references[2][1] . '">' . $this->references[2][0] . '</a></li>
      </ul>
      <ul class="footer-list">
        <li class="footer-list-points"><a href="' . $this->references[3][1] . '">' . $this->references[3][0] . '</a></li>
        <li class="footer-list-points"><a href="' . $this->references[4][1] . '">' . $this->references[4][0] . '</a></li>
        <li class="footer-list-points"><a href="' . $this->references[5][1] . '">' . $this->references[5][0] . '</a></li>
      </ul>
    </div>
    ';
    }
}

?>