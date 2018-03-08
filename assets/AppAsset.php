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
        '//fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C700%7CPlayfair+Display%7CRaleway%7CSpectral%7CRubik',
        'frontAssets/vendor/bootstrap/bootstrap.min.css',
        'frontAssets/vendor/icon-line/css/simple-line-icons.css',
        'frontAssets/vendor/icon-awesome/css/font-awesome.min.css',
        'frontAssets/vendor/icon-line-pro/style.css',
        'frontAssets/vendor/slick-carousel/slick/slick.css',
        'frontAssets/vendor/icon-hs/style.css',
        'frontAssets/vendor/chosen/chosen.css',
        'frontAssets/vendor/hamburgers/hamburgers.min.css',
        'frontAssets/vendor/hs-megamenu/src/hs.megamenu.css',
        'frontAssets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css',
        'frontAssets/vendor/animate.css',
        'frontAssets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css',
        'frontAssets/vendor/revolution-slider/revolution/css/settings.css',
        'frontAssets/vendor/revolution-slider/revolution/css/layers.css',
        'frontAssets/vendor/revolution-slider/revolution/css/navigation.css',
        'frontAssets/vendor/revolution-slider/revolution-addons/typewriter/css/typewriter.css',
        'frontAssets/css/styles.e-commerce.css',
        'frontAssets/css/custom.css',

    ];
    public $js = [
        //'frontAssets/vendor/jquery/jquery.min.js',
        'frontAssets/vendor/jquery-migrate/jquery-migrate.min.js',
        'frontAssets/vendor/popper.min.js',
         'frontAssets/vendor/bootstrap/bootstrap.min.js',
        'frontAssets/vendor/jquery.countdown.min.js',
        'frontAssets/vendor/slick-carousel/slick/slick.js',
        'frontAssets/vendor/hs-megamenu/src/hs.megamenu.js',
        'frontAssets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js',
        'frontAssets/vendor/appear.js',
        'frontAssets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js',
        'frontAssets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js',
        'frontAssets/vendor/revolution-slider/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js',
        'frontAssets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js',
        'frontAssets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js',
        'frontAssets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js',
        'frontAssets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js',
        'frontAssets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js',
        'frontAssets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js',
        'frontAssets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js',
        'frontAssets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js',
        'frontAssets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js',
        'frontAssets/js/hs.core.js',
        'frontAssets/js/components/hs.header.js',
        'frontAssets/js/helpers/hs.hamburgers.js',
        'frontAssets/js/components/hs.dropdown.js',
        'frontAssets/js/components/hs.scrollbar.js',
        'frontAssets/js/components/hs.select.js',
        'frontAssets/js/components/hs.countdown.js',
        'frontAssets/js/components/hs.carousel.js',
        'frontAssets/js/components/hs.tabs.js',
        'frontAssets/js/components/hs.go-to.js',
        'frontAssets/js/components/hs.count-qty.js',
        'frontAssets/js/components/hs.step-form.js',
        'frontAssets/js/components/hs.validation.js',
        'frontAssets/js/custom.js',
        'frontAssets/vendor/chosen/chosen.jquery.js',
        'frontAssets/vendor/jquery-validation/dist/jquery.validate.min.js',
        'frontAssets/vendor/image-select/src/ImageSelect.jquery.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
