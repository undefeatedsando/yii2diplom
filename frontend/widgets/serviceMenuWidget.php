<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\ServiceNameTranslation;

class serviceMenuWidget extends Widget{
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        return $this->render(
                'serviceMenu',
                [
                    'services' => ServiceNameTranslation::getNamesArr(),
                ]
                );
    }
}
