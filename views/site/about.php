<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?><!-- Breadcrumbs -->
      <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <ul class="u-list-inline">
            <li class="list-inline-item g-mr-5">
              <a class="u-link-v5 g-color-text" href="#!">Home</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-mr-5">
              <a class="u-link-v5 g-color-text" href="#!">Pages</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-color-primary">
              <span>Help</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Help -->
      <div class="container g-pt-100 g-pb-70">
        <div class="row g-mb-20">
          <div class="col-md-4 g-mb-30">
            <h2 class="mb-5">Browse Help Topics</h2>

            <!-- Nav tabs -->
            <ul class="nav flex-column u-nav-v5-3 u-nav-primary g-bg-gray-light-v5 rounded g-pa-20" role="tablist" data-target="nav-5-3-primary-ver" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary">
              <li class="nav-item">
                <a class="nav-link active g-brd-bottom-none g-color-primary--hover" data-toggle="tab" href="#nav-5-3-primary-ver--1" role="tab">Recommended Topics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-brd-bottom-none g-color-primary--hover" data-toggle="tab" href="#nav-5-3-primary-ver--2" role="tab">Where's My Stuff?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-brd-bottom-none g-color-primary--hover" data-toggle="tab" href="#nav-5-3-primary-ver--3" role="tab">Managing Your Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-brd-bottom-none g-color-primary--hover" data-toggle="tab" href="#nav-5-3-primary-ver--4" role="tab">Account Settings &amp; Payment Methods</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-brd-bottom-none g-color-primary--hover" data-toggle="tab" href="#nav-5-3-primary-ver--5" role="tab">Returns &amp; Refunds</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-brd-bottom-none g-color-primary--hover" data-toggle="tab" href="#nav-5-3-primary-ver--6" role="tab">Shipping Policies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-brd-bottom-none g-color-primary--hover" data-toggle="tab" href="#nav-5-3-primary-ver--7" role="tab">Other Topics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-brd-bottom-none g-color-primary--hover" data-toggle="tab" href="#nav-5-3-primary-ver--8" role="tab">Need more help?</a>
              </li>
            </ul>
            <!-- End Nav tabs -->
          </div>

          <div class="col-md-8 g-mb-30">
            <!-- Search Form -->
            <form class="g-pos-rel g-mb-50">
              <span class="g-pos-abs g-top-1 g-left-0 g-z-index-3 g-px-13 g-py-10">
                <i class="g-color-gray-dark-v4 g-font-size-12 icon-education-045 u-line-icon-pro"></i>
              </span>
              <input class="form-control u-form-control g-brd-around g-brd-gray-light-v3 g-brd-primary--focus g-font-size-13 g-rounded-3 g-pl-35" type="search" placeholder="Type to find answer">
            </form>
            <!-- End Search Form -->

            <!-- Tab panes -->
            <div id="nav-5-3-primary-ver" class="tab-content g-pt-20 g-pt-0--md">
              <div class="tab-pane fade show active" id="nav-5-3-primary-ver--1" role="tabpanel">
                <h3 class="h5 g-color-gray-dark-v2 g-mb-30">Learn how to...</h3>

                <!-- Accordion -->
                <div id="accordion-12-1" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-1-heading-01" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">1.</span>
                      Cancel Items or Orders
                    </div>
                    <div id="accordion-12-1-body-01" class="collapse show" role="tabpanel" aria-labelledby="accordion-12-1-heading-01">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-1-body-01" data-toggle="collapse" data-parent="#accordion-12-1" aria-expanded="false" aria-controls="accordion-12-1-body-01">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-1-heading-02" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">2.</span>
                      Manage Your Orders
                    </div>
                    <div id="accordion-12-1-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-12-1-heading-02">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-1-body-02" data-toggle="collapse" data-parent="#accordion-12-1" aria-expanded="false" aria-controls="accordion-12-1-body-02">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-1-heading-03" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">3.</span>
                      Track Your Package
                    </div>
                    <div id="accordion-12-1-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-12-1-heading-03">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        The time has come to bring those ideas and plans to life. Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone. Their new technique, described in a study published on Thursday in the journal Science, promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-1-body-03" data-toggle="collapse" data-parent="#accordion-12-1" aria-expanded="false" aria-controls="accordion-12-1-body-03">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-1-heading-04" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">4.</span>
                      Check the Status of Your Refund
                    </div>
                    <div id="accordion-12-1-body-04" class="collapse" role="tabpanel" aria-labelledby="accordion-12-1-heading-04">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-1-body-04" data-toggle="collapse" data-parent="#accordion-12-1" aria-expanded="false" aria-controls="accordion-12-1-body-04">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-1-heading-05" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">5.</span>
                      Change Your Payment Method
                    </div>
                    <div id="accordion-12-1-body-05" class="collapse" role="tabpanel" aria-labelledby="accordion-12-1-heading-05">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-1-body-05" data-toggle="collapse" data-parent="#accordion-12-1" aria-expanded="false" aria-controls="accordion-12-1-body-05">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-1-heading-06" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">6.</span>
                      Manage Your Account Information
                    </div>
                    <div id="accordion-12-1-body-06" class="collapse" role="tabpanel" aria-labelledby="accordion-12-1-heading-06">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        The time has come to bring those ideas and plans to life. Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone. Their new technique, described in a study published on Thursday in the journal Science, promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-1-body-06" data-toggle="collapse" data-parent="#accordion-12-1" aria-expanded="false" aria-controls="accordion-12-1-body-03">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-1-heading-07" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">7.</span>
                      About Two-Step Verification
                    </div>
                    <div id="accordion-12-1-body-07" class="collapse" role="tabpanel" aria-labelledby="accordion-12-1-heading-07">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-1-body-07" data-toggle="collapse" data-parent="#accordion-12-1" aria-expanded="false" aria-controls="accordion-12-1-body-07">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Accordion -->
              </div>

              <div class="tab-pane fade" id="nav-5-3-primary-ver--2" role="tabpanel">
                <h3 class="h5 g-color-gray-dark-v2 g-mb-30">Where's My Stuff?</h3>

                <!-- Accordion -->
                <div id="accordion-12-2" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-2-heading-01" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">1.</span>
                      Find a Missing Package that Shows as Delivered
                    </div>
                    <div id="accordion-12-2-body-01" class="collapse show" role="tabpanel" aria-labelledby="accordion-12-2-heading-01">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-2-body-01" data-toggle="collapse" data-parent="#accordion-12-2" aria-expanded="false" aria-controls="accordion-12-2-body-01">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-2-heading-02" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">2.</span>
                      Contact Shipping Carrier
                    </div>
                    <div id="accordion-12-2-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-12-2-heading-02">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-2-body-02" data-toggle="collapse" data-parent="#accordion-12-2" aria-expanded="false" aria-controls="accordion-12-2-body-02">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-2-heading-03" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">3.</span>
                      Track Your Package
                    </div>
                    <div id="accordion-12-2-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-12-2-heading-03">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        The time has come to bring those ideas and plans to life. Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone. Their new technique, described in a study published on Thursday in the journal Science, promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-2-body-03" data-toggle="collapse" data-parent="#accordion-12-2" aria-expanded="false" aria-controls="accordion-12-2-body-03">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Accordion -->
              </div>

              <div class="tab-pane fade" id="nav-5-3-primary-ver--3" role="tabpanel">
                <h3 class="h5 g-color-gray-dark-v2 g-mb-30">Managing Your Orders</h3>

                <!-- Accordion -->
                <div id="accordion-12-3" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-3-heading-01" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">1.</span>
                      Cancel Items or Orders
                    </div>
                    <div id="accordion-12-3-body-01" class="collapse show" role="tabpanel" aria-labelledby="accordion-12-3-heading-01">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-3-body-01" data-toggle="collapse" data-parent="#accordion-12-3" aria-expanded="false" aria-controls="accordion-12-3-body-01">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-3-heading-02" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">2.</span>
                      Change Your Order Information
                    </div>
                    <div id="accordion-12-3-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-12-3-heading-02">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-3-body-02" data-toggle="collapse" data-parent="#accordion-12-3" aria-expanded="false" aria-controls="accordion-12-3-body-02">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-3-heading-03" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">3.</span>
                      Contact Third-Party Sellers
                    </div>
                    <div id="accordion-12-3-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-12-3-heading-03">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        The time has come to bring those ideas and plans to life. Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone. Their new technique, described in a study published on Thursday in the journal Science, promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-3-body-03" data-toggle="collapse" data-parent="#accordion-12-3" aria-expanded="false" aria-controls="accordion-12-3-body-03">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Accordion -->
              </div>

              <div class="tab-pane fade" id="nav-5-3-primary-ver--4" role="tabpanel">
                <h3 class="h5 g-color-gray-dark-v2 g-mb-30">Account Settings &amp; Payment Methods</h3>

                <!-- Accordion -->
                <div id="accordion-12-4" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-4-heading-01" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">1.</span>
                      End Your Amazon Prime Membership
                    </div>
                    <div id="accordion-12-4-body-01" class="collapse show" role="tabpanel" aria-labelledby="accordion-12-4-heading-01">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-4-body-01" data-toggle="collapse" data-parent="#accordion-12-4" aria-expanded="false" aria-controls="accordion-12-4-body-01">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-4-heading-02" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">2.</span>
                      About Problems Signing In
                    </div>
                    <div id="accordion-12-4-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-12-4-heading-02">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-4-body-02" data-toggle="collapse" data-parent="#accordion-12-4" aria-expanded="false" aria-controls="accordion-12-4-body-02">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-4-heading-03" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">3.</span>
                      Manage Your Address Book
                    </div>
                    <div id="accordion-12-4-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-12-4-heading-03">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        The time has come to bring those ideas and plans to life. Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone. Their new technique, described in a study published on Thursday in the journal Science, promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-4-body-03" data-toggle="collapse" data-parent="#accordion-12-4" aria-expanded="false" aria-controls="accordion-12-4-body-03">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Accordion -->
              </div>

              <div class="tab-pane fade" id="nav-5-3-primary-ver--5" role="tabpanel">
                <h3 class="h5 g-color-gray-dark-v2 g-mb-30">Returns &amp; Refunds</h3>

                <!-- Accordion -->
                <div id="accordion-12-5" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-5-heading-01" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">1.</span>
                      Return Items You Ordered
                    </div>
                    <div id="accordion-12-5-body-01" class="collapse show" role="tabpanel" aria-labelledby="accordion-12-5-heading-01">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-5-body-01" data-toggle="collapse" data-parent="#accordion-12-5" aria-expanded="false" aria-controls="accordion-12-5-body-01">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-5-heading-02" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">2.</span>
                      Check the Status of Your Refund
                    </div>
                    <div id="accordion-12-5-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-12-5-heading-02">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-5-body-02" data-toggle="collapse" data-parent="#accordion-12-5" aria-expanded="false" aria-controls="accordion-12-5-body-02">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-5-heading-03" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">3.</span>
                      Return Kindle eBooks
                    </div>
                    <div id="accordion-12-5-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-12-5-heading-03">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        The time has come to bring those ideas and plans to life. Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone. Their new technique, described in a study published on Thursday in the journal Science, promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-5-body-03" data-toggle="collapse" data-parent="#accordion-12-5" aria-expanded="false" aria-controls="accordion-12-5-body-03">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Accordion -->
              </div>

              <div class="tab-pane fade" id="nav-5-3-primary-ver--6" role="tabpanel">
                <h3 class="h5 g-color-gray-dark-v2 g-mb-30">Shipping Policies</h3>

                <!-- Accordion -->
                <div id="accordion-12-6" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-6-heading-01" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">1.</span>
                      Shipping Rates &amp; Times
                    </div>
                    <div id="accordion-12-6-body-01" class="collapse show" role="tabpanel" aria-labelledby="accordion-12-6-heading-01">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-6-body-01" data-toggle="collapse" data-parent="#accordion-12-6" aria-expanded="false" aria-controls="accordion-12-6-body-01">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-6-heading-02" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">2.</span>
                      International Shipping
                    </div>
                    <div id="accordion-12-6-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-12-6-heading-02">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-6-body-02" data-toggle="collapse" data-parent="#accordion-12-6" aria-expanded="false" aria-controls="accordion-12-6-body-02">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-6-heading-03" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">3.</span>
                      Unify Prime
                    </div>
                    <div id="accordion-12-6-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-12-6-heading-03">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        The time has come to bring those ideas and plans to life. Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone. Their new technique, described in a study published on Thursday in the journal Science, promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-6-body-03" data-toggle="collapse" data-parent="#accordion-12-6" aria-expanded="false" aria-controls="accordion-12-6-body-03">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Accordion -->
              </div>

              <div class="tab-pane fade" id="nav-5-3-primary-ver--7" role="tabpanel">
                <h3 class="h5 g-color-gray-dark-v2 g-mb-30">Other Topics</h3>

                <!-- Accordion -->
                <div id="accordion-12-7" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-7-heading-01" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">1.</span>
                      Gifts, Gift Cards &amp; Registries
                    </div>
                    <div id="accordion-12-7-body-01" class="collapse show" role="tabpanel" aria-labelledby="accordion-12-7-heading-01">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-7-body-01" data-toggle="collapse" data-parent="#accordion-12-7" aria-expanded="false" aria-controls="accordion-12-7-body-01">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-7-heading-02" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">2.</span>
                      Security &amp; Privacy
                    </div>
                    <div id="accordion-12-7-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-12-7-heading-02">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-7-body-02" data-toggle="collapse" data-parent="#accordion-12-7" aria-expanded="false" aria-controls="accordion-12-7-body-02">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-7-heading-03" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">3.</span>
                      Author, Publisher &amp; Vendor Guides
                    </div>
                    <div id="accordion-12-7-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-12-7-heading-03">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        The time has come to bring those ideas and plans to life. Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone. Their new technique, described in a study published on Thursday in the journal Science, promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-7-body-03" data-toggle="collapse" data-parent="#accordion-12-5" aria-expanded="false" aria-controls="accordion-12-5-body-03">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-7-heading-04" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">4.</span>
                      Pricing
                    </div>
                    <div id="accordion-12-7-body-04" class="collapse" role="tabpanel" aria-labelledby="accordion-12-7-heading-04">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        The time has come to bring those ideas and plans to life. Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone. Their new technique, described in a study published on Thursday in the journal Science, promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-7-body-04" data-toggle="collapse" data-parent="#accordion-12-5" aria-expanded="false" aria-controls="accordion-12-5-body-04">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-7-heading-05" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">5.</span>
                      Placing an Order
                    </div>
                    <div id="accordion-12-7-body-05" class="collapse" role="tabpanel" aria-labelledby="accordion-12-7-heading-05">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        The time has come to bring those ideas and plans to life. Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone. Their new technique, described in a study published on Thursday in the journal Science, promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-7-body-05" data-toggle="collapse" data-parent="#accordion-12-5" aria-expanded="false" aria-controls="accordion-12-5-body-05">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-7-heading-06" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">6.</span>
                      Sales Tax &amp; Regulatory Fees
                    </div>
                    <div id="accordion-12-7-body-06" class="collapse" role="tabpanel" aria-labelledby="accordion-12-7-heading-06">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        The time has come to bring those ideas and plans to life. Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone. Their new technique, described in a study published on Thursday in the journal Science, promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-7-body-06" data-toggle="collapse" data-parent="#accordion-12-5" aria-expanded="false" aria-controls="accordion-12-5-body-06">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-7-heading-07" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">7.</span>
                      Promotions &amp; Deals
                    </div>
                    <div id="accordion-12-7-body-07" class="collapse" role="tabpanel" aria-labelledby="accordion-12-7-heading-07">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        The time has come to bring those ideas and plans to life. Sifting through teaspoons of clay and sand scraped from the floors of caves, German researchers have managed to isolate ancient human DNA — without turning up a single bone. Their new technique, described in a study published on Thursday in the journal Science, promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-7-body-07" data-toggle="collapse" data-parent="#accordion-12-5" aria-expanded="false" aria-controls="accordion-12-5-body-07">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Accordion -->
              </div>

              <div class="tab-pane fade" id="nav-5-3-primary-ver--8" role="tabpanel">
                <h3 class="h5 g-color-gray-dark-v2 g-mb-30">Need more help?</h3>

                <!-- Accordion -->
                <div id="accordion-12-8" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-8-heading-01" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">1.</span>
                      Ask the unify Help Community
                    </div>
                    <div id="accordion-12-8-body-01" class="collapse show" role="tabpanel" aria-labelledby="accordion-12-8-heading-01">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-8-body-01" data-toggle="collapse" data-parent="#accordion-12-8" aria-expanded="false" aria-controls="accordion-12-8-body-01">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="card g-brd-none g-brd-bottom g-brd-gray-light-v3 rounded-0 g-pb-30 g-mb-30">
                    <div id="accordion-12-8-heading-02" class="u-accordion__header g-color-gray-dark-v4 g-font-weight-500 g-font-size-16 g-pa-0" role="tab">
                      <span class="g-color-primary g-font-weight-700 g-font-size-16 g-line-height-1_2">2.</span>
                      Contact Us
                    </div>
                    <div id="accordion-12-8-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-12-8-heading-02">
                      <div class="u-accordion__body g-color-gray-dark-v4">
                        This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.
                      </div>
                    </div>
                    <h5 class="g-font-weight-400 g-font-size-13 g-pl-8 mt-3 mb-0">
                      <a class="collapsed g-color-primary g-text-underline--none--hover g-pa-10" href="#accordion-12-8-body-02" data-toggle="collapse" data-parent="#accordion-12-8" aria-expanded="false" aria-controls="accordion-12-8-body-02">
                        <span class="u-accordion__control-icon">
                          <i class="g-font-style-normal">Read More
                            <span class="ml-2 fa fa-caret-up"></span>
                          </i>
                          <i class="g-font-style-normal">Read Less
                            <span class="ml-2 fa fa-caret-down"></span>
                          </i>
                        </span>
                      </a>
                    </h5>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Accordion -->
              </div>
            </div>
            <!-- End Tab panes -->
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 g-mb-30">
            <!-- Media -->
            <div class="media">
              <div class="d-flex mr-2">
                <span class="u-icon-v3 g-width-20 g-height-20 g-color-white g-bg-primary g-font-size-12 rounded-circle">
                  <i class="fa fa-question"></i>
                </span>
              </div>
              <div class="media-body">
                <a class="u-link-v5 g-color-main g-color-primary--hover g-font-weight-600" href="#!">Can't find answer?</a>
                <p>Do not worry. Our support team<br>will help you.</p>
              </div>
            </div>
            <!-- End Media -->
          </div>

          <div class="col-md-8 g-mb-30">
            <!-- Contact Form -->
            <form>
              <div class="row">
                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded g-py-13 g-px-15" type="text" placeholder="Name">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded g-py-13 g-px-15" type="email" placeholder="Email">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded g-py-13 g-px-15" type="text" placeholder="Subject">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded g-py-13 g-px-15" type="tel" placeholder="Phone">
                </div>

                <div class="col-md-12 form-group g-mb-40">
                  <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover g-resize-none rounded g-py-13 g-px-15" rows="7" placeholder="Message"></textarea>
                </div>
              </div>

              <div class="text-center">
                <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Send Message</button>
              </div>
            </form>
            <!-- End Contact Form -->
          </div>
        </div>
      </div>
      <!-- End Help -->