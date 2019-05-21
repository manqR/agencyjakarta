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
        'vendors/select2/dist/css/select2.css',
        'styles/climacons-font.css',
        'vendors/bootstrap/dist/css/bootstrap.css',
        'vendors/datatables/media/css/dataTables.bootstrap.css',
        'styles/font-awesome.css',
        'styles/card.css',
        'styles/sli.css',
        'styles/animate.css',
        'styles/app.css',
        'styles/app.skins.css',
        'vendors/summernote/dist/summernote.css',  
    ];
    public $js = [
        'scripts/helpers/modernizr.js',
        // 'vendors/jquery/dist/jquery.js',
        // 'vendors/bootstrap/dist/js/bootstrap.js',
        'scripts/tooltip.js',
        'vendors/fastclick/lib/fastclick.js',
        'vendors/select2/dist/js/select2.js',
        'vendors/datatables/media/js/jquery.dataTables.js',
        'vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js',
        'scripts/helpers/smartresize.js',
        'scripts/constants.js',
        'vendors/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js',
        'vendors/summernote/dist/summernote.js',
        'scripts/forms/wysiwyg.js',
        'scripts/main.js',
        'scripts/helpers/sameheight.js',
        'scripts/forms/plugins.js',
        'inc/apiTable.js',


        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
