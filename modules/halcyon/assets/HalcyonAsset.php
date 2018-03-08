<?php

namespace app\modules\halcyon\assets;

use yii\web\AssetBundle;

class HalcyonAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/halcyon/web/';

    public $css = [
        'css/flexslider.css',
        'css/queries.css',
        'css/animate.css',
        //'css/bootstrap-theme.min.css',
        'css/styles.css',

    ];
    public $js = [
        'js/waypoints.min.js',
        'js/jquery.flexslider.js',
        'js/modernizr.js',
        'js/jquery.smooth-scroll.js',
        'js/overlay.js',
        'js/scripts.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}