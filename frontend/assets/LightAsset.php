<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Стандартный пакет ресурсов для внутренних страниц сайта
 */
class LightAsset extends AssetBundle
{
    public $basePath = '';
    public $baseUrl = 'https:/';
    public $css = [
        'fonts.googleapis.com/css?family=Poiret+One',
        'fonts.googleapis.com/css?family=Didact+Gothic',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
