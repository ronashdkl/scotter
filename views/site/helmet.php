<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Halmet'; 
?>  

  <div class="container">
        <div class="row">
          <!-- Content -->
          <div class="col-md-9">
            <div class="g-pr-15--lg">
              <!-- Filters -->
              <div class="d-flex justify-content-end align-items-center g-brd-bottom g-brd-gray-light-v4 g-pt-40 g-pb-20">
                <!-- Show -->
                <div class="g-mr-60">
                  <h2 class="h6 align-middle d-inline-block g-font-weight-400 text-uppercase g-pos-rel g-top-1 mb-0">Show:</h2>

                  <!-- Secondary Button -->
                  <div class="d-inline-block btn-group g-line-height-1_2">
                    <button type="button" class="btn btn-secondary dropdown-toggle h6 align-middle g-brd-none g-color-gray-dark-v5 g-color-black--hover g-bg-transparent text-uppercase g-font-weight-300 g-font-size-12 g-pa-0 g-pl-10 g-ma-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      9
                    </button>
                    <div class="dropdown-menu rounded-0">
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">All</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">5</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">15</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">20</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">25</a>
                    </div>
                  </div>
                  <!-- End Secondary Button -->
                </div>
                <!-- End Show -->

                <!-- Sort By -->
                <div class="g-mr-60">
                  <h2 class="h6 align-middle d-inline-block g-font-weight-400 text-uppercase g-pos-rel g-top-1 mb-0">Sort by:</h2>

                  <!-- Secondary Button -->
                  <div class="d-inline-block btn-group g-line-height-1_2">
                    <button type="button" class="btn btn-secondary dropdown-toggle h6 align-middle g-brd-none g-color-gray-dark-v5 g-color-black--hover g-bg-transparent text-uppercase g-font-weight-300 g-font-size-12 g-pa-0 g-pl-10 g-ma-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Select sort by
                    </button>
                    <div class="dropdown-menu rounded-0"> 
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Price low to high</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">price high to low</a>
                    </div>
                  </div>
                  <!-- End Secondary Button -->
                </div>
                <!-- End Sort By --> 
              </div>
              <!-- End Filters -->

              <!-- Products -->
              <div class="row g-pt-30 g-mb-50">
                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">

                    <figcaption class="w-100 g-bg-primary g-bg-black--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                      <a class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover" href="#!">New Arrival</a>
                    </figcaption>
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">
                          Halmet
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Halmet</a>
                      <span class="d-block g-color-black g-font-size-17">$52.00</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">

                    <span class="u-ribbon-v1 g-width-40 g-height-40 g-color-white g-bg-primary g-font-size-13 text-center text-uppercase g-rounded-50x g-top-10 g-right-minus-10 g-px-2 g-py-10">-40%</span>
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">
                          Halmet
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Halmet</a>
                      <span class="d-block g-color-black g-font-size-17">$99.00</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">

                    <figcaption class="w-100 g-bg-lightred text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                      <span class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1">Sold Out</a>
                    </figcaption>
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">
                          Halmet
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Halmet</a>
                      <span class="d-block g-color-black g-font-size-17">$49.99</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">
                          Halmet
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Halmet</a>
                      <span class="d-block g-color-black g-font-size-17">$82.37</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">

                    <figcaption class="w-100 g-bg-lightred text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                      <span class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1">Sold Out</a>
                    </figcaption>
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">
                         Halmet
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Halmet</a>
                      <span class="d-block g-color-black g-font-size-17">$35.99</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">
                          Halmet
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Halmet</a>
                      <span class="d-block g-color-black g-font-size-17">$105.99</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">

                    <span class="u-ribbon-v1 g-width-40 g-height-40 g-color-white g-bg-primary g-font-size-13 text-center text-uppercase g-rounded-50x g-top-10 g-right-minus-10 g-px-2 g-py-10">-40%</span>

                    <figcaption class="w-100 g-bg-primary g-bg-black--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                      <a class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">New Arrival</a>
                    </figcaption>
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">
                          Halmet
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Halmet</a>
                      <span class="d-block g-color-black g-font-size-17">$11.00</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">
                          Halmet
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Halmet</a>
                      <span class="d-block g-color-black g-font-size-17">$34.00</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>

                <div class="col-6 col-lg-4 g-mb-30">
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <img class="img-fluid" src="<?= yii\helpers\Url::toRoute('/uploads/products/halmet.jpg')?>" alt="Image Description">
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">
                          Halmet
                        </a>
                      </h4>
                      <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Halmet</a>
                      <span class="d-block g-color-black g-font-size-17">$11.00</span>
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Cart">
                          <i class="icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </li>
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= \yii\helpers\Url::toRoute('/product/');?>"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Add to Wishlist">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>
              </div>
              <!-- End Products -->

              <hr class="g-mb-60">

              <!-- Pagination -->
              <nav class="g-mb-100" aria-label="Page Navigation">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item hidden-down">
                    <a class="active u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--active g-color-white g-bg-primary--active g-font-size-12 rounded-circle g-pa-5" href="<?= \yii\helpers\Url::toRoute('/product/');?>">1</a>
                  </li>
                  <li class="list-inline-item hidden-down">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="<?= \yii\helpers\Url::toRoute('/product/');?>">2</a>
                  </li>
                  <li class="list-inline-item g-hidden-xs-down">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="<?= \yii\helpers\Url::toRoute('/product/');?>">3</a>
                  </li>
                  <li class="list-inline-item hidden-down">
                    <span class="g-width-30 g-height-30 g-color-gray-dark-v5 g-font-size-12 rounded-circle g-pa-5">...</span>
                  </li>
                  <li class="list-inline-item g-hidden-xs-down">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="<?= \yii\helpers\Url::toRoute('/product/');?>">15</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5 g-ml-15" href="<?= \yii\helpers\Url::toRoute('/product/');?>" aria-label="Next">
                      <span aria-hidden="true">
                        <i class="fa fa-angle-right"></i>
                      </span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                  <li class="list-inline-item float-right">
                    <span class="u-pagination-v1__item-info g-color-gray-dark-v4 g-font-size-12 g-pa-5">Page 1 of 15</span>
                  </li>
                </ul>
              </nav>
              <!-- End Pagination -->
            </div>
          </div>
          <!-- End Content -->

          <!-- Filters -->
          <div class="col-md-3 g-brd-left--lg g-brd-gray-light-v4 g-pt-40">
            <div class="g-pl-15--lg g-pt-60">
              <!-- Categories -->
              <div class="g-mb-30">
                <h3 class="h5 mb-3">Categories</h3>

                <ul class="list-unstyled">
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Moped
                      <span class="float-right g-font-size-12">202</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Gears
                      <span class="float-right g-font-size-12">44</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Halmets
                      <span class="float-right g-font-size-12">398</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="<?= \yii\helpers\Url::toRoute('/product/');?>">Spair Parts
                      <span class="float-right g-font-size-12">56</span></a>
                  </li> 
                </ul>
              </div>  

              <hr>

              <!-- Color -->
              <div class="g-mb-30">
                <h3 class="h5 mb-3">Color</h3>

                <!-- Checkbox -->
                <div>
                  <label class="form-check-inline u-check m-0">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">
                      <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-primary rounded-circle"></i>
                    </span>
                  </label>
                  <label class="form-check-inline u-check mb-0 mr-0 g-ml-5">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">
                      <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-beige rounded-circle"></i>
                    </span>
                  </label>
                  <label class="form-check-inline u-check mb-0 mr-0 g-ml-5">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">
                      <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-black rounded-circle"></i>
                    </span>
                  </label>
                  <label class="form-check-inline u-check mb-0 mr-0 g-ml-5">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">
                      <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-yellow rounded-circle"></i>
                    </span>
                  </label>
                  <label class="form-check-inline u-check mb-0 mr-0 g-ml-5">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">
                      <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-blue rounded-circle"></i>
                    </span>
                  </label>
                  <label class="form-check-inline u-check mb-0 mr-0 g-ml-5">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">
                      <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-purple rounded-circle"></i>
                    </span>
                  </label>
                  <label class="form-check-inline u-check mb-0 mr-0 g-ml-5">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">
                      <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-brown rounded-circle"></i>
                    </span>
                  </label>
                  <label class="form-check-inline u-check mb-0 mr-0 g-ml-5">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">
                      <i class="d-block g-absolute-centered g-width-16 g-height-16 g-bg-gray-dark-v4 rounded-circle"></i>
                    </span>
                  </label>
                </div>
                <!-- End Checkbox -->
              </div>
              <!-- End Color -->

              <hr>

              <!-- Rating -->
              <div class="g-mb-30">
                <h3 class="h5 mb-3">Rating</h3>

                <ul class="js-rating u-rating-v1 g-line-height-1 g-font-size-20 g-color-gray-light-v3 mb-0" data-hover-classes="g-color-primary">
                  <li class="g-color-primary click">
                    <i class="fa fa-star"></i>
                  </li>
                  <li class="g-color-primary click">
                    <i class="fa fa-star"></i>
                  </li>
                  <li class="g-color-primary click">
                    <i class="fa fa-star"></i>
                  </li>
                  <li class="g-color-primary click">
                    <i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i>
                  </li>
                </ul>
              </div>
              <!-- End Rating -->

              <hr>

              <button class="btn btn-block u-btn-black g-font-size-12 text-uppercase g-py-12 g-px-25" type="button">Reset</button>
            </div>
          </div>
          <!-- End Filters -->
        </div>
      </div> 