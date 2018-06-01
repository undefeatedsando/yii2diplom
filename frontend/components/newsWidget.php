<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//namespace app\widgets;
namespace frontend\components;

use yii\base\Widget;

class newsWidget extends Widget{
    
    public $img, $header, $text;
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        return $this->render(
                'news',
                [
                    'img' => $this->img,
                    'text' => $this->text,
                    'header' => $this->header
                ]
                );
    }
}
