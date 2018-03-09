<?php
use yii\bootstrap\Html;
use app\helpers\Configuration;
?>
      <!-- Top Bar -->
        <div class="u-header__section g-brd-bottom g-brd-gray-light-v4 g-bg-black g-transition-0_3">
          <div class="container">
            <div class="row justify-content-between align-items-center g-mx-0--lg">
              <div class="col-sm-auto g-hidden-sm-down">
                <!-- Social Icons -->
                <ul class="list-inline g-py-14 mb-0">
                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_8 g-color-primary--hover g-pa-3" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_8 g-color-primary--hover g-pa-3" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_8 g-color-primary--hover g-pa-3" href="#!">
                      <i class="fa fa-tumblr"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_8 g-color-primary--hover g-pa-3" href="#!">
                      <i class="fa fa-pinterest-p"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_8 g-color-primary--hover g-pa-3" href="#!">
                      <i class="fa fa-google"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Social Icons -->
              </div>

              <div class="col-sm-auto g-hidden-sm-down g-color-white-opacity-0_6 g-font-weight-400 g-pl-15 g-pl-0--sm g-py-14">
                <i class="icon-communication-163 u-line-icon-pro g-font-size-18 g-valign-middle g-color-white-opacity-0_8 g-mr-10 g-mt-minus-2"></i>
                <?= Configuration::get('site_phone_number')?>
              </div>  
              <div class="col-sm-auto g-pos-rel g-py-14">
                <!-- List -->
                <ul class="list-inline g-overflow-hidden g-pt-1 mb-0">
                  <!-- Currency -->
                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_6 g-color-primary--hover g-font-weight-400 g-text-underline--none--hover"
                       aria-expanded="false"
                       data-dropdown-event="hover" 
                       data-dropdown-type="css-animation"  
                       data-dropdown-animation-in="fadeIn"
                       data-dropdown-animation-out="fadeOut">
                        <?= Configuration::get('currency')?>
                    </a> 
                  </li>
                  <!-- End Currency -->

                  <li class="list-inline-item g-color-white-opacity-0_3 g-mx-4">|</li>

                  <!-- Language -->
                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_6 g-color-primary--hover g-font-weight-400 g-text-underline--none--hover"
                       aria-expanded="false"
                       data-dropdown-event="hover" 
                       data-dropdown-type="css-animation" 
                       data-dropdown-animation-in="fadeIn"
                       data-dropdown-animation-out="fadeOut"> <img src="<?= yii\helpers\Url::toRoute('/')?>uploads/flag.png">
                      Swedish
                    </a> 
                  </li>
                  <!-- End Language -->
                </ul>
                <!-- End List -->
              </div>

              <div class="col-sm-auto g-pos-rel g-py-14">
                <!-- List -->
                <ul class="list-inline g-overflow-hidden g-pt-1 g-mx-minus-4 mb-0"> 
                  <li class="list-inline-item g-color-white-opacity-0_3 g-mx-4">|</li>
                  <li class="list-inline-item g-mx-4">
                    <a class="g-color-white-opacity-0_6 g-color-primary--hover g-font-weight-400 g-text-underline--none--hover" href="<?= Yii::$app->getUrlManager()->getBaseUrl(); ?>/about/">Help</a>
                  </li>

                  <li class="list-inline-item g-color-white-opacity-0_3 g-mx-4">|</li>
                  <!-- Account -->
                  <li class="list-inline-item">
                    <a id="account-dropdown-invoker-2" class="g-color-white-opacity-0_6 g-color-primary--hover g-font-weight-400 g-text-underline--none--hover" href="#!"
                       aria-controls="account-dropdown-2"
                       aria-haspopup="true"
                       aria-expanded="false"
                       data-dropdown-event="hover"
                       data-dropdown-target="#account-dropdown-2"
                       data-dropdown-type="css-animation"
                       data-dropdown-duration="300"
                       data-dropdown-hide-on-scroll="false"
                       data-dropdown-animation-in="fadeIn"
                       data-dropdown-animation-out="fadeOut">
                      Account
                    </a>
                    <ul id="account-dropdown-2" class="list-unstyled u-shadow-v29 g-pos-abs g-bg-white g-width-160 g-pb-5 g-mt-19 g-z-index-2"
                        aria-labelledby="account-dropdown-invoker-2">
                     <?php
                     if(Yii::$app->user->isGuest){


                     ?>
                      <li>
                        <a class="d-block g-color-black g-color-primary--hover g-text-underline--none--hover g-font-weight-400 g-py-5 g-px-20" href="<?= yii\helpers\Url::toRoute('/user/login/')?>">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="d-block g-color-black g-color-primary--hover g-text-underline--none--hover g-font-weight-400 g-py-5 g-px-20" href="<?= yii\helpers\Url::toRoute('/user/register/')?>">
                          Signup
                        </a>
                      </li>
                        <?php } else{ ?>

                      <li>
                        <a class="d-block g-color-black g-color-primary--hover g-text-underline--none--hover g-font-weight-400 g-py-5 g-px-20" href="<?= yii\helpers\Url::toRoute('/user/order/')?>">
                          Your Orders
                        </a>
                      </li>

                        <?php } ?>
                    </ul>
                  </li>
                  <!-- End Account -->
                </ul>
                <!-- End List -->
              </div>

              <div class="col-sm-auto g-pr-15 g-pr-0--sm">
                <!-- Basket -->
                <div class="u-basket d-inline-block g-z-index-3">
                  <div class="g-py-10 g-px-6">
                    <a href="#!" id="basket-bar-invoker" class="u-icon-v1 g-color-white-opacity-0_8 g-color-primary--hover g-font-size-17 g-text-underline--none--hover"
                       aria-controls="basket-bar"
                       aria-haspopup="true"
                       aria-expanded="false"
                       data-dropdown-event="hover"
                       data-dropdown-target="#basket-bar"
                       data-dropdown-type="css-animation"
                       data-dropdown-duration="300"
                       data-dropdown-hide-on-scroll="false"
                       data-dropdown-animation-in="fadeIn"
                       data-dropdown-animation-out="fadeOut">
                      <span class="u-badge-v1--sm g-color-white g-bg-primary g-font-size-11 g-line-height-1_4 g-rounded-50x g-pa-4" style="top: 7px !important; right: 3px !important;">4</span>
                      <i class="icon-hotel-restaurant-105 u-line-icon-pro"></i>
                    </a>
                  </div>

                  <div id="basket-bar" class="u-basket__bar u-dropdown--css-animation u-dropdown--hidden g-text-transform-none g-bg-white g-brd-around g-brd-gray-light-v4"
                       aria-labelledby="basket-bar-invoker">
                    <div class="g-brd-bottom g-brd-gray-light-v4 g-pa-15 g-mb-10">
                      <span class="d-block h6 text-center text-uppercase mb-0">Shopping Cart</span>
                    </div>
                    <div class="js-scrollbar g-height-200">
                      <!-- Product -->
                      <div class="u-basket__product g-brd-none g-px-20">
                        <div class="row no-gutters g-pb-5">
                          <div class="col-4 pr-3">
                            <a class="u-basket__product-img" href="#!">
                              <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">
                            </a>
                          </div>

                          <div class="col-8">
                            <h6 class="g-font-weight-400 g-font-size-default">
                              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Black Glasses</a>
                            </h6>
                            <small class="g-color-primary g-font-size-12">1 x $22.00</small>
                          </div>
                        </div>
                        <button type="button" class="u-basket__product-remove">&times;</button>
                      </div>
                      <!-- End Product -->

                      <!-- Product -->
                      <div class="u-basket__product g-brd-none g-px-20">
                        <div class="row no-gutters g-pb-5">
                          <div class="col-4 pr-3">
                            <a class="u-basket__product-img" href="#!">
                              <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">
                            </a>
                          </div>

                          <div class="col-8">
                            <h6 class="g-font-weight-400 g-font-size-default">
                              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Gloves</a>
                            </h6>
                            <small class="g-color-primary g-font-size-12">2 x $55.00</small>
                          </div>
                        </div>
                        <button type="button" class="u-basket__product-remove">&times;</button>
                      </div>
                      <!-- End Product -->

                      <!-- Product -->
                      <div class="u-basket__product g-brd-none g-px-20">
                        <div class="row no-gutters g-pb-5">
                          <div class="col-4 pr-3">
                            <a class="u-basket__product-img" href="#!">
                              <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">
                            </a>
                          </div>

                          <div class="col-8">
                            <h6 class="g-font-weight-400 g-font-size-default">
                              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Chukka Shoes</a>
                            </h6>
                            <small class="g-color-primary g-font-size-12">1 x $199.00</small>
                          </div>
                        </div>
                        <button type="button" class="u-basket__product-remove">&times;</button>
                      </div>
                      <!-- End Product -->

                      <!-- Product -->
                      <div class="u-basket__product g-brd-none g-px-20">
                        <div class="row no-gutters g-pb-5">
                          <div class="col-4 pr-3">
                            <a class="u-basket__product-img" href="#!">
                              <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">
                            </a>
                          </div>

                          <div class="col-8">
                            <h6 class="g-font-weight-400 g-font-size-default">
                              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Desk Clock</a>
                            </h6>
                            <small class="g-color-primary g-font-size-12">1 x $12.00</small>
                          </div>
                        </div>
                        <button type="button" class="u-basket__product-remove">&times;</button>
                      </div>
                      <!-- End Product -->
                    </div>

                    <div class="clearfix g-px-15">
                      <div class="row align-items-center text-center g-brd-y g-brd-gray-light-v4 g-font-size-default">
                        <div class="col g-brd-right g-brd-gray-light-v4">
                          <strong class="d-block g-py-10 text-uppercase g-color-main g-font-weight-500 g-py-10">Total</strong>
                        </div>
                        <div class="col">
                          <strong class="d-block g-py-10 g-color-main g-font-weight-500 g-py-10">$433.00</strong>
                        </div>
                      </div>
                    </div>

                    <div class="g-pa-20">
                      <div class="text-center g-mb-15">
                        <a class="text-uppercase g-color-primary g-color-main--hover g-font-weight-400 g-font-size-13 g-text-underline--none--hover" href="<?= \yii\helpers\Url::toRoute('/checkout/');?>">
                          View Cart
                          <i class="ml-2 icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </div>
                      <a class="btn btn-block u-btn-black g-brd-primary--hover g-bg-primary--hover g-font-size-12 text-uppercase rounded g-py-10" href="<?= \yii\helpers\Url::toRoute('/checkout/');?>">Proceed to Checkout</a>
                    </div>
                  </div>
                </div>
                <!-- End Basket -->

                <!-- Search -->
                <div class="d-inline-block g-valign-middle">
                  <div class="g-py-10 g-pl-15">
                    <a href="#!" class="g-color-white-opacity-0_8 g-color-primary--hover g-font-size-17 g-text-underline--none--hover"
                       aria-haspopup="true"
                       aria-expanded="false"
                       data-dropdown-event="click"
                       aria-controls="searchform-1"
                       data-dropdown-target="#searchform-1"
                       data-dropdown-type="css-animation"
                       data-dropdown-duration="300"
                       data-dropdown-animation-in="fadeInUp"
                       data-dropdown-animation-out="fadeOutDown">
                      <i class="g-pos-rel g-top-3 icon-education-045 u-line-icon-pro"></i>
                    </a>
                  </div>

                  <!-- Search Form -->
                  <form id="searchform-1" action="<?= \yii\helpers\Url::toRoute('/search/');?>" class="u-searchform-v1 u-dropdown--css-animation u-dropdown--hidden u-shadow-v20 g-brd-around g-brd-gray-light-v4 g-bg-white g-right-0 rounded g-pa-10 1g-mt-8">
                    <div class="input-group">
                      <input class="form-control g-font-size-13" type="search" placeholder="Search Here...">
                      <div class="input-group-append p-0">
                        <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-13 g-px-15" type="submit">Go</button>
                      </div>
                    </div>
                  </form>
                  <!-- End Search Form -->
                </div>
                <!-- End Search -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Top Bar -->