<?php

/* 
 * $active представляет из себя перечисляемый тип, способный принимать значения одной из вкладок
 */

namespace frontend\widgets;

use yii\base\Widget;


class StatusWidget extends Widget{
    
    public $avatar, $name, $family_name, $city, $active;
    
    public function init() {
        parent::init();
        if($this->active==null){
            $this->active = "profile";
        }
        if($this->avatar==null){
            $this->avatar= "img3.png";
        }
        if($this->name==""){
            $this->name= "Измените имя в профиле";
            $this->city= "Москва";
        }
        
    }
    
    public function run() {
        return $this->render(
                'status',
                [
		'avatar' => $this->avatar,
		'name' => $this->name,
		'family_name' => $this->family_name,
		'city' => $this->city,
		'active' => $this->active,
                ]
                );
    }
    
}

?>