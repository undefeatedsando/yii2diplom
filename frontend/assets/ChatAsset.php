<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Стандартный пакет ресурсов для внутренних страниц сайта
 */
class ChatAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/assets';
    public $css = [
    ];
    public $js = [
        'hzgi2c33/chatTawkAPI.js',
        'hzgi2c33/chatSwitch.js',
        
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
