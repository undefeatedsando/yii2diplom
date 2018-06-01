<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\widgets;

use yii\base\Widget;

class couponWidget extends Widget{
    
    public $type, $header, $option, $promo, $phone, $address, $full;
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        /*if ($this->type == 'Поставщики'){
            $this->type = "supply";
        }*/
        $this->rewriteType();
        return $this->render(
                'coupon',
                [
                    'type' => $this->type,
                    'header' => $this->header,
                    'option' => $this->option,
                    'promo' => $this->promo,
                    'phone' => $this->phone,
                    'address' => $this->address,
                    'full' => $this->full,
                ]
                );
    }
    
    protected function rewriteType(){
        
        $arrayOfTypes = [
            
                "project" => "Расчет проектов",
                "supply" => "Поставщики",
                "factory" => "Фабрики",
                "account" => "Налоговый учет",
                "intellectual" => "Интеллектуальная собственность",
                "contract" => "Заключение договоров",
                "reference" => "Справки и выписки",
                "meeting" => "Организация мероприятий",
                "grant" => "Льготы и субсидии",
                "investment" => "Привлечение инвестиций",
                "ads" => "Реклама и продвижение",
                "global" => "Поддержка международного бизнеса",
                "grade" => "Экспертиза, оценка, сертификация",
                "education" => "Подготовка кадров",
            
        ];
        
        foreach ($arrayOfTypes as $key => $value){
            if ($this->type == $value){
                $this->type = $key;
            }
        }
    }
}
