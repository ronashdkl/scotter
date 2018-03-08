<?php
use app\widgets\Menu;
use app\models\Category;
use app\helpers\Configuration;
use app\models\Information;
?>

<div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
    <nav class="js-mega-menu navbar navbar-expand-lg">
        <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0"
                    type="button"
                    aria-label="Toggle navigation"
                    aria-expanded="false"
                    aria-controls="navBar"
                    data-toggle="collapse"
                    data-target="#navBar">
                <span class="hamburger hamburger--slider g-pr-0">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->
            <a class="navbar-brand" href="<?= \yii\helpers\Url::toRoute('/'); ?>">
                <?php /*<img src="frontAssets/img/logo/logo-1.png" alt="Image Description">*/ ?><h2>SCOOTER </h2>
            </a>
            <!-- End Logo -->

            <!-- Navigation -->
            <div id="navBar" class="collapse navbar-collapse align-items-center flex-sm-row g-pt-15 g-pt-0--lg">
<?php
$categories = Category::find()->where(['show_in_menu'=>Configuration::YES])->all();
$information = Information::find()->where(['show_in_menu'=>Configuration::YES])->all();



?>
                <ul class="navbar-nav ml-auto">
                    <li class="g-mx-10--lg g-mx-15--xl">
                        <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20"
                           href="<?= \yii\helpers\Url::toRoute('/'); ?>">
                            Home
                        </a>
                    </li>
                    <?php
                    foreach ($categories as $category) {
                        if ($category->parent == null) {
                            if ($category->menu_type == Configuration::MENU_WITH_IMAGE && $category->getCategories()->count() > 0) {
                                ?>
                                <!-- New Arrivals - Mega Menu Moped -->
                                <li class="hs-has-mega-menu nav-item g-ml-10--lg g-ml-15--xl"
                                    data-animation-in="fadeIn"
                                    data-animation-out="fadeOut"
                                    data-position="right">
                                    <a id="mega-menu-label-5"
                                       class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20"
                                       href="#!" aria-haspopup="true" aria-expanded="false">
                                        <?= $category->getName() ?>
                                        <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
                                    </a>

                                    <!-- Mega Menu -->

                                    <div class="w-100 hs-mega-menu u-shadow-v11 g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-pa-30 g-mt-17"
                                         aria-labelledby="mega-menu-label-5">
                                        <div class="row">
                                            <div class="col-md-3 g-mb-30 g-mb-0--md">
                                                <div class="g-pa-30">
                                                    <!-- Links -->
                                                    <?php

                                                    foreach ($category->getCategories()->where(['show_in_menu'=>Configuration::YES])->all() as $subCategory) {
                                                            echo ' <span class="d-block g-font-weight-500 text-uppercase mb-2">'.$subCategory->getName().'</span>';
                                                                echo '<ul class="list-unstyled">';

                                                               foreach ($subCategory->products as $product){
                                                                   echo ' <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">- '.$product->getName().'</a>
                                                        </li>';
                                                               }

                                                                echo'</ul>';
                                                    }

                                                ?>
                                                    <!-- End Links -->
                                                </div>
                                            </div>

                                           <?php
                                                    foreach (Category::getFeature()->getProducts()->limit(3)->all() as $featureCatProduct) {
                                                        ?>
                                                        <div class="col-md-3 g-mb-30 g-mb-0--md">
                                                            <!-- Article -->
                                                            <article
                                                                    class="g-bg-size-cover g-bg-pos-center g-bg-cover g-bg-bluegray-opacity-0_3--after text-center g-px-40 g-py-80"
                                                                    data-bg-img-src="<?= $featureCatProduct->getAvatar()?>">
                                                                <div class="g-pos-rel g-z-index-1">
                                                                    <span class="d-block g-color-white g-font-weight-400 text-uppercase mb-3"><?=$featureCatProduct->getName()?></span>
                                                                    <a class="btn u-btn-white g-brd-primary--hover g-color-white--hover g-bg-primary--hover g-font-size-11 text-uppercase g-py-10 g-px-20"
                                                                       href="#!">Shop Now</a>
                                                                </div>
                                                            </article>
                                                            <!-- End Article -->
                                                        </div>

                                                        <?php
                                                    }
                                                        ?>

                                        </div>
                                    </div>
                                    <!-- End Mega Menu -->
                                </li>
                                <!-- End New Arrivals - Mega Menu -->
                                <?php
                            } elseif ($category->menu_type == Configuration::MENU_TEXT_ONLY && $category->getCategories()->count() > 0) {
                                ?>
                                <!-- Categories - Mega Menu -->
                                <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl"
                                    data-animation-in="fadeIn"
                                    data-animation-out="fadeOut"
                                    data-position="right">
                                    <a id="mega-menu-label-3"
                                       class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20"
                                       href="#!" aria-haspopup="true" aria-expanded="false">
                                        <?= $category->getName() ?>
                                        <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
                                    </a>

                                    <!-- Mega Menu -->
                                    <div class="w-100 hs-mega-menu u-shadow-v11 g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-pa-30 g-mt-17"
                                         aria-labelledby="mega-menu-label-3">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-2 g-mb-30 g-mb-0--md">
                                                <!-- Links -->
                                                <div class="mb-5">
                                                    <span class="d-block g-font-weight-500 text-uppercase mb-2">Classic Reservdelar</span>

                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Bromsar – Hjul – Däck</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Elsystem – Tändning</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Instrumentpanel – Knappar –Vajrar</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Kåpor – Speglar – Sadel</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- End Links -->


                                                <span class="d-block g-font-weight-500 text-uppercase mb-2">Classic Reservdelar</span>

                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                           href="#!">Bromsar – Hjul – Däck</a>
                                                    </li>
                                                    <li>
                                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                           href="#!">Elsystem – Tändning</a>
                                                    </li>
                                                    <li>
                                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                           href="#!">Instrumentpanel – Knappar –Vajrar</a>
                                                    </li>
                                                    <li>
                                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                           href="#!">Kåpor – Speglar – Sadel</a>
                                                    </li>
                                                </ul>
                                                <!-- End Links -->
                                            </div>

                                            <div class="col-sm-6 col-lg-3 g-mb-30 g-mb-0--md">
                                                <!-- Links -->
                                                <div class="mb-5">
                                                    <span class="d-block g-font-weight-500 text-uppercase mb-2">Classic Reservdelar</span>

                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Bromsar – Hjul – Däck</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Elsystem – Tändning</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Instrumentpanel – Knappar –Vajrar</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Kåpor – Speglar – Sadel</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- End Links -->

                                                <div class="mb-5 g-mb-0--lg">
                                                    <span class="d-block g-font-weight-500 text-uppercase mb-2">Classic Reservdelar</span>

                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Bromsar – Hjul – Däck</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Elsystem – Tändning</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Instrumentpanel – Knappar –Vajrar</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Kåpor – Speglar – Sadel</a>
                                                        </li>
                                                    </ul>
                                                    <!-- End Links -->
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-3 g-mb-30 g-mb-0--md">
                                                <!-- Links -->
                                                <div class="mb-5">
                                                    <span class="d-block g-font-weight-500 text-uppercase mb-2">Classic Reservdelar</span>

                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Bromsar – Hjul – Däck</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Elsystem – Tändning</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Instrumentpanel – Knappar –Vajrar</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Kåpor – Speglar – Sadel</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- End Links -->

                                                <span class="d-block g-font-weight-500 text-uppercase mb-2">Classic Reservdelar</span>

                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                           href="#!">Bromsar – Hjul – Däck</a>
                                                    </li>
                                                    <li>
                                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                           href="#!">Elsystem – Tändning</a>
                                                    </li>
                                                    <li>
                                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                           href="#!">Instrumentpanel – Knappar –Vajrar</a>
                                                    </li>
                                                    <li>
                                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                           href="#!">Kåpor – Speglar – Sadel</a>
                                                    </li>
                                                </ul>
                                                <!-- End Links -->
                                            </div>

                                            <div class="col-sm-6 col-lg-3 g-mb-30 g-mb-0--md">
                                                <!-- Links -->
                                                <div class="mb-5">
                                                    <span class="d-block g-font-weight-500 text-uppercase mb-2">Classic Reservdelar</span>

                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Bromsar – Hjul – Däck</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Elsystem – Tändning</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Instrumentpanel – Knappar –Vajrar</a>
                                                        </li>
                                                        <li>
                                                            <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                               href="#!">Kåpor – Speglar – Sadel</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- End Links -->

                                                <span class="d-block g-font-weight-500 text-uppercase mb-2">Classic Reservdelar</span>

                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                           href="#!">Bromsar – Hjul – Däck</a>
                                                    </li>
                                                    <li>
                                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                           href="#!">Elsystem – Tändning</a>
                                                    </li>
                                                    <li>
                                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                           href="#!">Instrumentpanel – Knappar –Vajrar</a>
                                                    </li>
                                                    <li>
                                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                           href="#!">Kåpor – Speglar – Sadel</a>
                                                    </li>
                                                </ul>
                                                <!-- End Links -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu -->
                                </li>

                                <?php
                            } else {
                                ?>
                                <li class="g-mx-10--lg g-mx-15--xl">
                                    <a id="nav-link--home"
                                       class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20"
                                       href="/<?= $category->title ?>">
                                        <?= $category->getName() ?>
                                    </a>
                                </li>

                                <?php
                            }
                        }
                    }
                    ?>







                </ul>
            </div>
            <!-- End Navigation -->
        </div>
    </nav>
</div>
