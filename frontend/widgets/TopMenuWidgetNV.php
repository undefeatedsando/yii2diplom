<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class topMenuWidgetNV extends Widget{
    public $references = [
        ["", "#"],
        ["Главная", "/main"],
        ["Выйти", "/site/logout"],
        
    ];
    public function init() {
        parent::init();
    }
    
    public function run() {
        return '
    <nav>
      <div class="top-menu">
        <a href="' . $this->references[0][1] . '">' . $this->references[0][0] . '</a>' .
        Html::a($this->references[1][0], [$this->references[1][1]], []) .
        Html::a($this->references[2][0], [$this->references[2][1]], ['data-method' => 'POST']) . '
      </div>
    </nav>
    ';
    }
}

?>