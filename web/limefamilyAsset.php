<?php
namespace limefamily\limetheme\web;

use yii\web\AssetBundle;

class LimeFamilyAsset extends AssetBundle
{
    public $sourcePath = '@vendor/limefamily/static-theme/dist';
    public $css = [
        'css/limefamily.min.css',
        'css/limefamily-skins.min.css',
    ];
    public $js = [
        'js/limefamily.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
