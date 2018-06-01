<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\widgets;

use yii\base\Widget;


class testWidget extends Widget{
    
    public $message, $className;
    
    public function init() {
        parent::init();
        if($this->message==null){
            $this->message="Пустое сообщение";
        }
        if($this->className==null){
            $this->className="";
        }
    }
    
    public function run() {
        return $this->render(
                'test',
                [
                    'message' => $this->message,
                    'className' => $this->className
                ]
                );
    }
}

?>