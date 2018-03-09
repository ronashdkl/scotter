<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$isFrontpage = false;
if ((Yii::$app->controller->id.'/'.Yii::$app->controller->action->id) == 'site/index'  ) {
    $isFrontpage = true;
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<main>
<style type="text/css">
    .navbar.compressed {
        background: #ffffff !important;
        position: fixed;
        top: 0px;
        width: 100%;
    }
</style>    
    <header id="js-header" class="u-header u-header--static u-shadow-v19">
        <?= $this->render("header",['isFrontpage'=>$isFrontpage]); ?>

        <?= $this->render("menu",['isFrontpage'=>$isFrontpage]); ?>
    </header>

    <?= $this->render('content', ['content' => $content,'isFrontpage'=>$isFrontpage]) ?>
    <!-- Call to Action -->
    <div class="g-bg-primary">
        <div class="container g-py-20">
            <div class="row justify-content-center">
                <div class="col-md-4 mx-auto g-py-20">
                    <!-- Media -->
                    <div class="media g-px-50--lg">
                        <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-048 u-line-icon-pro"></i>
                        <div class="media-body">
                            <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free Shipping</span>
                            <span class="d-block g-color-white-opacity-0_8">In 2-3 Days</span>
                        </div>
                    </div>
                    <!-- End Media -->
                </div>

                <div class="col-md-4 mx-auto g-brd-x--md g-brd-white-opacity-0_3 g-py-20">
                    <!-- Media -->
                    <div class="media g-px-50--lg">
                        <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-040 u-line-icon-pro"></i>
                        <div class="media-body">
                            <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free Returns</span>
                            <span class="d-block g-color-white-opacity-0_8">No Questions Asked</span>
                        </div>
                    </div>
                    <!-- End Media -->
                </div>

                <div class="col-md-4 mx-auto g-py-20">
                    <!-- Media -->
                    <div class="media g-px-50--lg">
                        <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-hotel-restaurant-062 u-line-icon-pro"></i>
                        <div class="media-body text-left">
                            <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free 24</span>
                            <span class="d-block g-color-white-opacity-0_8">Days Storage</span>
                        </div>
                    </div>
                    <!-- End Media -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Call to Action -->
    <!-- Footer -->
    <footer class="g-bg-main-light-v1">
        <!-- Content -->
        <div class="g-brd-bottom g-brd-secondary-light-v1">
            <div class="container g-pt-100">
                <div class="row justify-content-start g-mb-30 g-mb-0--md">
                    <div class="col-md-5 g-mb-30">
                        <h2 class="h5 g-color-gray-light-v3 mb-4">Products</h2>

                        <div class="row">
                            <div class="col-4 g-mb-20">
                                <!-- Links -->
                                <ul class="list-unstyled g-font-size-13 mb-0">
                                    <li class="g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                           href="#!">Moped</a>
                                    </li>
                                    <li class="g-my-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Helmet</a>
                                    </li>
                                    <li class="g-my-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                           href="#!">Moped</a>
                                    </li>
                                    <li class="g-my-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                           href="#!">Moped</a>
                                    </li>
                                    <li class="g-my-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                           href="#!">Moped</a>
                                    </li>
                                </ul>
                                <!-- End Links -->
                            </div>

                            <div class="col-4 g-mb-20">
                                <!-- Links -->
                                <ul class="list-unstyled g-font-size-13 mb-0">
                                    <li class="g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Helmet</a>
                                    </li>
                                    <li class="g-my-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Helmet</a>
                                    </li>
                                    <li class="g-my-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Helmet</a>
                                    </li>
                                    <li class="g-my-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Helmet</a>
                                    </li>
                                    <li class="g-my-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Helmet</a>
                                    </li>
                                </ul>
                                <!-- End Links -->
                            </div>

                            <div class="col-4 g-mb-20">
                                <!-- Links -->
                                <ul class="list-unstyled g-font-size-13 mb-0">
                                    <li class="g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Spare
                                            Parts</a>
                                    </li>
                                    <li class="g-my-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Spare
                                            Parts</a>
                                    </li>
                                    <li class="g-my-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Spare
                                            Parts</a>
                                    </li>
                                    <li class="g-my-10">
                                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Spare
                                            Parts</a>
                                    </li>
                                </ul>
                                <!-- End Links -->
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-5 col-md-3 ml-auto g-mb-30 g-mb-0--sm">
                        <h2 class="h5 g-color-gray-light-v3 mb-4">Contacts</h2>

                        <!-- Links -->
                        <ul class="list-unstyled g-color-gray-dark-v5 g-font-size-13">
                            <li class="media my-3">
                                <i class="d-flex mt-1 mr-3 icon-hotel-restaurant-235 u-line-icon-pro"></i>
                                <div class="media-body">
                                    Unit 25 Suite 3, 925 Prospect
                                    <br>
                                    PI New York Avenue
                                </div>
                            </li>
                            <li class="media my-3">
                                <i class="d-flex mt-1 mr-3 icon-communication-062 u-line-icon-pro"></i>
                                <div class="media-body">
                                    htmlstream@support.com
                                </div>
                            </li>
                            <li class="media my-3">
                                <i class="d-flex mt-1 mr-3 icon-communication-033 u-line-icon-pro"></i>
                                <div class="media-body">
                                    +32 333 444 555
                                </div>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>
                </div>

                <!-- Secondary Content -->
                <div class="row">
                    <div class="col-md-4 g-mb-50">
                        <h2 class="h5 g-color-gray-light-v3 mb-4">Subscribe</h2>

                        <!-- Subscribe Form -->
                        <form class="input-group u-shadow-v19 rounded">
                            <input class="form-control g-brd-none g-color-gray-dark-v5 g-bg-main-light-v2 g-bg-main-light-v2--focus g-placeholder-gray-dark-v3 rounded g-px-20 g-py-8"
                                   type="email" placeholder="Enter your email">
                            <span class="input-group-addon u-shadow-v19 g-brd-none g-bg-main-light-v2 g-pa-5">
                    <button class="btn u-btn-primary rounded text-uppercase g-py-8 g-px-18" type="submit">
                      <i class="fa fa-angle-right"></i>
                    </button>
                  </span>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>

                    <div class="col-6 col-md-3 offset-lg-1 g-mb-30">
                        <h2 class="h5 g-color-gray-light-v3 mb-4">Language/Currency:</h2>

                        <!-- Large Button Group -->
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_6 g-color-primary--hover g-font-weight-400 g-text-underline--none--hover
                       aria-expanded=" false"
                            data-dropdown-event="hover"
                            data-dropdown-type="css-animation"
                            data-dropdown-animation-in="fadeIn"
                            data-dropdown-animation-out="fadeOut"> <img src="uploads/flag.png">
                            Swedish
                            </a>
                        </li>
                        <span class="g-color-gray-light-v3 mb-4">/</span>
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_6 g-color-primary--hover g-font-weight-400 g-text-underline--none--hover
                       aria-expanded=" false"
                            data-dropdown-event="hover"
                            data-dropdown-type="css-animation"
                            data-dropdown-animation-in="fadeIn"
                            data-dropdown-animation-out="fadeOut">
                            <i class="g-ml-20--md mr-2 fa fa-dollar"></i>
                            Dollar
                            </a>
                        </li>
                    </div>

                    <div class="col-6 col-md-3 ml-auto g-mb-30">
                        <h2 class="h5 g-color-gray-light-v3 mb-4">Follow Us On:</h2>

                        <!-- Social Icons -->
                        <ul class="list-inline mb-50">
                            <li class="list-inline-item g-mr-2">
                                <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-facebook--hover rounded"
                                   href="#!">
                                    <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                                    <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-twitter--hover rounded"
                                   href="#!">
                                    <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                                    <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-instagram--hover rounded"
                                   href="#!">
                                    <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-instagram"></i>
                                    <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-google-plus--hover rounded"
                                   href="#!">
                                    <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-google-plus"></i>
                                    <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-linkedin--hover rounded"
                                   href="#!">
                                    <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-linkedin"></i>
                                    <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Social Icons -->
                    </div>
                </div>
                <!-- End Secondary Content -->
            </div>
        </div>
        <!-- End Content -->

        <!-- Copyright -->
        <div class="container g-pt-30 g-pb-10">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 g-mb-20">
                    <p class="g-font-size-13 mb-0">2018 &copy; Htmlstream. All Rights Reserved.</p>
                </div>

                <div class="col-md-6 text-md-right g-mb-20">
                    <ul class="list-inline g-color-gray-dark-v5 g-font-size-25 mb-0">
                        <li class="list-inline-item g-cursor-pointer mr-1">
                            <i class="fa fa-cc-visa" title="Visa"
                               data-toggle="tooltip"
                               data-placement="top"></i>
                        </li>
                        <li class="list-inline-item g-cursor-pointer mx-1">
                            <i class="fa fa-cc-paypal" title="Paypal"
                               data-toggle="tooltip"
                               data-placement="top"></i>
                        </li>
                        <li class="list-inline-item g-cursor-pointer mx-1">
                            <i class="fa fa-cc-mastercard" title="Master Card"
                               data-toggle="tooltip"
                               data-placement="top"></i>
                        </li>
                        <li class="list-inline-item g-cursor-pointer ml-1">
                            <i class="fa fa-cc-stripe" title="Stripe"
                               data-toggle="tooltip"
                               data-placement="top"></i>
                        </li>
                        <li class="list-inline-item g-cursor-pointer ml-1">
                            <i class="fa fa-cc-discover" title="Discover"
                               data-toggle="tooltip"
                               data-placement="top"></i>
                        </li>
                        <li class="list-inline-item g-cursor-pointer ml-1">
                            <i class="fa fa-cc-jcb" title="JCB"
                               data-toggle="tooltip"
                               data-placement="top"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Copyright -->
    </footer>
    <!-- End Footer -->

    <!-- Go To Top -->
    <a class="js-go-to u-go-to-v2" href="#!"
       data-type="fixed"
       data-position='{
           "bottom": 15,
           "right": 15
         }'
       data-offset-top="400"
       data-compensation="#js-header"
       data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
    <!-- End Go To Top -->

    <!-- Modal Window -->
    <div id="modal-type-onscroll" class="js-autonomous-popup text-left g-bg-white g-pos-rel g-rounded-5"
         style="display: none;"
         data-modal-type="onscroll"
         data-open-effect="fadeIn"
         data-close-effect="fadeIn"
         data-breakpoint="1000"
         data-speed="500">
        <button type="button"
                class="close g-color-main-light-v3 g-color-primary--hover g-font-size-13 g-pos-abs g-top-15 g-right-15 g-opacity-1"
                onclick="Custombox.modal.close();">
            <i class="hs-icon hs-icon-close"></i>
        </button>

        <!-- Modal Window - Content -->
        <div class="g-width-720">
            <div class="row align-items-center">
                <div class="col-sm-6 g-height-350--sm g-bg-size-cover g-bg-pos-top-center g-rounded-left-5"
                     data-bg-img-src="<?= yii\helpers\Url::toRoute('/uploads/products/product1.jpg') ?>"></div>

                <div class="col-sm-6">
                    <div class="g-pl-30 g-pl-20--sm g-pr-30 g-py-20">
                        <!-- Info -->
                        <div class="g-mb-35">
                            <h3 class="h1 g-color-primary">Subscribe</h3>
                            <p class="g-font-weight-300 g-font-size-16">Get free promotions every month!</p>
                        </div>
                        <!-- End Info -->

                        <!-- Subscribe Form -->
                        <form class="input-group u-shadow-v19 rounded g-mb-20">
                            <input class="form-control g-brd-right-none g-brd-gray-light-v4 g-color-white g-bg-main-light-v3 g-rounded-left-5 g-px-20 g-py-8"
                                   type="email" placeholder="Enter your email">
                            <span class="input-group-addon u-shadow-v19 g-brd-left-none g-brd-gray-light-v4 g-bg-main-light-v3 g-rounded-right-5 g-pa-5">
                    <button class="btn u-btn-primary rounded text-uppercase g-py-8 g-px-18" type="submit">
                      <i class="fa fa-angle-right"></i>
                    </button>
                  </span>
                        </form>
                        <!-- End Subscribe Form -->

                        <!-- Social Icons -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item g-mx-0">
                                <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded"
                                   href="#!">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-0">
                                <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded"
                                   href="#!">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-0">
                                <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded"
                                   href="#!">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-0">
                                <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded"
                                   href="#!">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-0">
                                <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded"
                                   href="#!">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Social Icons -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Window - Content -->
    </div>
    <!-- End Modal Window -->
</main>

<div class="u-outer-spaces-helper"></div>

<?php $this->endBody() ?>
</body>
<script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

        $('#carouselCus1').slick('setOption', 'responsive', [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }], true);
    });

    // initialization of header
    $.HSCore.components.HSHeader.init($('#js-header'));
    $.HSCore.helpers.HSHamburgers.init('.hamburger');

    // initialization of HSMegaMenu component
    $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991
    });

    // initialization of HSDropdown component
    $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
        afterOpen: function () {
            $(this).find('input[type="search"]').focus();
        }
    });

    // initialization of go to
    $.HSCore.components.HSGoTo.init('.js-go-to');

    // initialization of countdowns
    var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
        yearsElSelector: '.js-cd-years',
        monthElSelector: '.js-cd-month',
        daysElSelector: '.js-cd-days',
        hoursElSelector: '.js-cd-hours',
        minutesElSelector: '.js-cd-minutes',
        secondsElSelector: '.js-cd-seconds'
    });

    // initialization of quantity counter
    $.HSCore.components.HSCountQty.init('.js-quantity');

    $(window).on('load', function () {
        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));
    });

    // initialization of revolution slider
    var tpj = jQuery;

    var revapi1014;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_1014_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1014_1");
        } else {
            revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style: "uranus",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 768,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        }
                    }
                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                    disable_onmobile: "on"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [868, 768, 960, 600],
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "#js-header",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false
                }
            });
        }

        RsTypewriterAddOn(tpj, revapi1014);
    });
</script>
<!-- Script for page checkout start here-->
<script>
    $(document).on('ready', function () {

        // initialization of form validation
        $.HSCore.components.HSValidation.init('.js-validate');

        // initialization of custom select
        $.HSCore.components.HSSelect.init('.js-custom-select');

        // initialization of quantity counter
        $.HSCore.components.HSCountQty.init('.js-quantity');

        // initialization of step form
        $.HSCore.components.HSStepForm.init('.js-step-form');
    });
</script>
<!-- script for page checkout end here-->
<script>
    $(document).on('ready', function () {

        // Tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');
    });

    $(window).on('resize', function () {
        setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
</script>
    <script type="text/javascript">
        $(document).ready(function() {
        $(window).on("scroll", function() {
          if ($(window).scrollTop() >= 10) {
            $(".navbar").addClass("compressed");
          } else {
            $(".navbar").removeClass("compressed");
          }
        });
      });
    </script>

</html>
<?php $this->endPage() ?>
