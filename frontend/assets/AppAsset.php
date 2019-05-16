<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'styles/webfont.css',
        'styles/climacons-font.css',
        'vendors/bootstrap/dist/css/bootstrap.css',
        'styles/font-awesome.css',
        'styles/card.css',
        'styles/sli.css',
        'styles/animate.css',
        'styles/app.css',
        'styles/app.skins.css',
    ];
    public $js = [
        'scripts/helpers/modernizr.js',
        // 'vendors/jquery/dist/jquery.js',
        'vendors/bootstrap/dist/js/bootstrap.js',
        'vendors/fastclick/lib/fastclick.js',
        'vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js',
        'scripts/helpers/smartresize.js',
        'scripts/constants.js',
        'scripts/main.js',
        'vendors/flot/jquery.flot.js',
        'vendors/flot/jquery.flot.resize.js',
        'vendors/flot/jquery.flot.categories.js',
        'vendors/flot/jquery.flot.stack.js',
        'vendors/flot/jquery.flot.time.js',
        'vendors/flot/jquery.flot.pie.js',
        'vendors/flot-spline/js/jquery.flot.spline.js',
        'vendors/flot.orderbars/js/jquery.flot.orderBars.js',
        'scripts/helpers/sameheight.js',
        'scripts/ui/dashboard.js',


        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
