<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.css',
        'fonts/themify/themify-icons.css',
        'fonts/Linearicons-Free-v1.0.0/icon-font.min.css',
        'fonts/elegant-font/html-css/style.css',
        'css/animate.css',
        'css/hamburgers.min.css',
        'css/animsition.css',
        'css/select2.css',
        'css/daterangepicker.css',
        'css/slick.css',
        'css/lightbox.css',
        'css/site.css',
        'css/main.css',
        'css/util.css',
    ];

    public $js = [
        'js/jquery-3.2.1.min.js',
        'js/animsition.js',
//        'js/popper.js',
//        'js/bootstrap.js',
//        'js/select2.js',
        'js/slick.js',
        'js/slick-custom.js',
        'js/lightbox.js',
        'js/jquery.accordion.js',
        'js/jquery.cookie.js',
        'js/main.js',
        'js/menu.js',



    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
