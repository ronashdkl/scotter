<?php
 $this->title=$product->getName();
$this->params['breadcrumbs'][] = ['label'=>ucfirst(Yii::$app->controller->id),'url'=>'#'];
$this->params['breadcrumbs'][] = ['label'=>ucfirst(Yii::$app->request->getQueryParam('category')),'url'=>'#'];
$this->params['breadcrumbs'][] = ['label'=>ucfirst(Yii::$app->controller->action->id),'url'=>'#'];
$this->params['breadcrumbs'][] = ['label'=>ucfirst(Yii::$app->request->getQueryParam('product'))];

 ?>


      <!-- Product Description -->
      <div class="container g-pt-50 g-pb-100">
        <div class="row">
          <div class="col-lg-7">
            <!-- Carousel -->
            <div id="carouselCus1" class="js-carousel g-pt-10 g-mb-10"
                 data-infinite="true"
                 data-fade="true"
                 data-arrows-classes="u-arrow-v1 g-brd-around g-brd-white g-absolute-centered--y g-width-45 g-height-45 g-font-size-14 g-color-white g-color-primary--hover rounded-circle"
                 data-arrow-left-classes="fa fa-angle-left g-left-40"
                 data-arrow-right-classes="fa fa-angle-right g-right-40"
                 data-nav-for="#carouselCus2">
              <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
                <img class="img-fluid w-100" src="<?= $product->getAvatar()?>" alt="Image Description">
              </div>
           <?php
                if($product->hasImages()){

                    foreach ($product->getImages()['url'] as $img){
                        ?>
                        <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
                            <img class="img-fluid w-100" src="<?= $img ?>" alt="Image Description">
                        </div>
                <?php
                    }
                }
           ?>
            </div>

            <div id="carouselCus2" class="js-carousel text-center u-carousel-v3 g-mx-minus-5"
                 data-infinite="true"
                 data-center-mode="true"
                 data-slides-show="3"
                 data-is-thumbs="true"
                 data-nav-for="#carouselCus1">
              <div class="js-slide g-cursor-pointer g-px-5">
                <img class="img-fluid" src="<?= $product->getAvatar()?>" alt="Image Description">
              </div>

                <?php
                if($product->hasImages()){

                    foreach ($product->getImages()['url'] as $img){
                        ?>
                        <div class="js-slide g-cursor-pointer g-px-5">
                            <img class="img-fluid" src="<?= $img ?>" alt="Image Description">
                        </div>
                        <?php
                    }
                }
                ?>


            </div>
            <!-- End Carousel -->
          </div>

          <div class="col-lg-5">
            <div class="g-px-40--lg g-pt-70">
              <!-- Product Info -->
              <div class="g-mb-30">
                <h1 class="g-font-weight-300 mb-4"><?= ($product->category->parent!=null)?$product->category->parentCategory->getName():$product->category->getName()?><br><?= $product->getName()?></h1>
                  <p><?= $product->getSummary()?></p>
              </div>
              <!-- End Product Info -->

              <!-- Price -->
              <div class="g-mb-30">
                <h2 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-12 text-uppercase mb-2">Price</h2>
                <span class="g-color-black g-font-weight-500 g-font-size-30 mr-2"><?=  $product->getSalePrice() ?></span>
                <s class="g-color-gray-dark-v4 g-font-weight-500 g-font-size-16"><?= $product->getActualPrice() ?></s>
              </div>
              <!-- End Price -->

              <!-- Accordion -->
              <div id="accordion-01" role="tablist" aria-multiselectable="true">
                <div id="accordion-01-heading-01" class="g-brd-y g-brd-gray-light-v3 py-3" role="tab">
                  <h5 class="g-font-weight-400 g-font-size-default mb-0">
                    <a class="d-block g-color-gray-dark-v5 g-text-underline--none--hover" href="#accordion-01-body-01" data-toggle="collapse" data-parent="#accordion-01" aria-expanded="false" aria-controls="accordion-01-body-01">Details
                      <span class="float-right g-pos-rel g-top-3 mr-1 fa fa-angle-down"></span></a>
                  </h5>
                </div>
                <div id="accordion-01-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-01-heading-01">
                  <div class="g-py-10">
                    <p class="g-font-size-12 mb-2">SHELL: 100% POLYESTER</p>
                    <p class="g-font-size-12 mb-2">Always check the care label instructions.</p>
                    <p class="g-font-size-12 mb-2">Professional dry clean only. Remove all detachable parts before cleaning. Do not iron.</p>
                    <p class="g-font-size-12 mb-2">(Navy: Avoid contact with light coloured fabrics and upholstery especially whilst damp.)</p>
                  </div>
                </div>
              </div>
              <!-- End Accordion --> 

              <!-- Size -->
              <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
                <h4 class="h6 text-uppercase mb-3">Select Moped Class</h4> 
                        <div class="radio">
                          <label><input type="radio" name="optradio"> <span title="Semper leo. Fusce lectus justo, porta quis felis at, imperdiet elementum libero">Class One</span></label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="optradio"> <span title="Semper leo. Fusce lectus justo, porta quis felis at, imperdiet elementum libero">Class Two</span></label>
                        </div>
              </div>
              <!-- End Size -->

              <!-- Quantity -->
              <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3 g-mb-30" role="tab">
                <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Quantity</h5>

                <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
                  <input class="js-result form-control text-center g-font-size-13 rounded-0" type="text" value="1" readonly>

                  <div class="input-group-addon d-flex align-items-center g-width-30 g-brd-gray-light-v2 g-bg-white g-font-size-13 rounded-0 g-pa-5">
                    <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up"></i>
                    <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down"></i>
                  </div>
                </div>
              </div>
              <!-- End Quantity -->

              <!-- Buttons -->
              <div class="row g-mx-minus-5 g-mb-20">
                <div class="col g-px-5 g-mb-10">
                  <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25" type="button">
                    Add to Cart <i class="align-middle ml-2 icon-finance-100 u-line-icon-pro"></i>
                  </button>
                </div> 
              </div>
              <!-- End Buttons -->

              <!-- Nav Tabs -->
              <ul class="nav d-flex justify-content-between g-font-size-12 text-uppercase" role="tablist" data-target="nav-1-1-default-hor-left">
                <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                  <a class="nav-link active g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--3" role="tab">Returns</a>
                </li> 
                <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                  <a class="nav-link g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--2" role="tab">Delivery</a>
                </li>
              </ul>
              <!-- End Nav Tabs -->

              <!-- Tab Panes -->
              <div id="nav-1-1-default-hor-left" class="tab-content">
                <div class="tab-pane fade show active g-pt-30" id="nav-1-1-default-hor-left--3" role="tabpanel">
                  <p class="g-color-gray-dark-v4 g-font-size-13 mb-0">You can return/exchange your orders in Unify E-commerce. For more information, read our
                    <a href="page-help-1.html">Help</a>.</p>
                </div> 

                <div class="tab-pane fade g-pt-30" id="nav-1-1-default-hor-left--2" role="tabpanel">
                  <!-- Shipping Mehtod -->
                  <table>
                    <thead class="h6 g-brd-bottom g-brd-gray-light-v3 g-color-gray-dark-v3 g-font-size-13">
                      <tr>
                        <th class="g-width-100 g-font-weight-500 g-pa-0 g-pb-10">Destination</th>
                        <th class="g-width-140 g-font-weight-500 g-pa-0 g-pb-10">Delivery type</th>
                        <th class="g-width-150 g-font-weight-500 g-pa-0 g-pb-10">Delivery time</th>
                        <th class="g-font-weight-500 text-right g-pa-0 g-pb-10">Cost</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">UK</td>
                        <td class="align-top g-py-10">Standard delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">2-3 Working days</td>
                        <td class="align-top text-right g-py-10">$5.5</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10"></td>
                        <td class="align-top g-py-10">Next day</td>
                        <td class="align-top g-font-size-11 g-py-10">Order before 12pm monday - thursday and receive it the next day</td>
                        <td class="align-top text-right g-py-10">$9.5</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10"></td>
                        <td class="align-top g-py-10">Saturday delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">Saturday delivery for orders placed before 12pm on friday</td>
                        <td class="align-top text-right g-py-10">$12.00</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">Europe</td>
                        <td class="align-top g-py-10">Standard delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">3-9 Working days</td>
                        <td class="align-top text-right g-py-10">$20.00</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">America</td>
                        <td class="align-top g-py-10">Standard delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">3-9 Working days</td>
                        <td class="align-top text-right g-py-10">$25.00</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- End Shipping Mehtod -->
                </div>
              </div>
              <!-- End Tab Panes -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Product Description -->

      <!-- Description -->
      <div class="container">
        <div class="g-brd-y g-brd-gray-light-v4 g-pt-100 g-pb-70">
          <h2 class="h4 mb-3">Description</h2>

          <?= $product->getDescription()?>
        </div>
      </div>
      <!-- End Description -->

      <!-- Review -->
      <div class="container">
        <div class="g-brd-y g-brd-gray-light-v4 g-py-100">
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <h2 class="h4 mb-5">Review</h2>

              <!-- Review -->
              <div class="g-brd-bottom g-brd-gray-light-v4 g-pb-30 g-mb-50">
                <!-- Media -->
                <div class="media g-mb-30">
                  <img class="d-flex g-width-60 g-height-60 rounded-circle g-mt-3 g-mr-20" src="<?=yii\helpers\Url::toRoute("/uploads/products/product1.jpg");?>" alt="Image Description">
                  <div class="media-body">
                    <div class="d-flex align-items-start g-mb-15 g-mb-10--sm">
                      <div class="d-block">
                        <h5 class="h6">James Coolman</h5>

                        <!-- Rating -->
                        <ul class="js-rating u-rating-v1 g-font-size-13 g-color-gray-light-v3 mb-0" data-hover-classes="g-color-primary">
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                        </ul>
                        <!-- End Rating -->

                        <span class="d-block g-color-gray-dark-v5 g-font-size-11">June 7, 2017</span>
                      </div>
                      <div class="ml-auto">
                        <a class="u-link-v5 g-color-black g-color-primary--hover g-font-size-12 text-uppercase" href="#!">Reply</a>
                      </div>
                    </div>

                    <p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels. Whether through commerce or just an experience to tell your brand's story, the time has come to start using development languages that fit your projects needs.</p>

                    <ul class="list-inline my-0">
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-medical-022 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 5
                        </a>
                      </li>
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-finance-206 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 1
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Media -->

                <!-- Media -->
                <div class="media g-brd-top g-brd-gray-light-v4 g-pt-30 g-ml-40 g-mb-30">
                  <img class="d-flex g-width-60 g-height-60 rounded-circle g-mt-3 g-mr-15" src="<?=yii\helpers\Url::toRoute("/uploads/products/product1.jpg");?>" alt="Image Description">
                  <div class="media-body">
                    <div class="d-flex align-items-start g-mb-15 g-mb-10--sm">
                      <div class="d-block">
                        <h5 class="h6">Alberta Watson</h5>

                        <!-- Rating -->
                        <ul class="js-rating u-rating-v1 g-font-size-13 g-color-gray-light-v3 mb-0" data-hover-classes="g-color-primary">
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                        </ul>
                        <!-- End Rating -->

                        <span class="d-block g-color-gray-dark-v5 g-font-size-11">June 7, 2017</span>
                      </div>
                      <div class="ml-auto">
                        <a class="u-link-v5 g-color-black g-color-primary--hover g-font-size-12 text-uppercase" href="#!">Reply</a>
                      </div>
                    </div>

                    <p>Now that your brand is all dressed up and ready to party, it's time to release it to the world. By the way, let's celebrate already.</p>

                    <ul class="list-inline my-0">
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-medical-022 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 2
                        </a>
                      </li>
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-finance-206 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 0
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Media -->

                <!-- Media -->
                <div class="media g-brd-top g-brd-gray-light-v4 g-pt-30 g-mb-30">
                  <img class="d-flex g-width-60 g-height-60 rounded-circle g-mt-3 g-mr-15" src="<?=yii\helpers\Url::toRoute("/uploads/products/product1.jpg");?>" alt="Image Description">
                  <div class="media-body">
                    <div class="d-flex align-items-start g-mb-15 g-mb-10--sm">
                      <div class="d-block">
                        <h5 class="h6">Maria Lee</h5>

                        <!-- Rating -->
                        <ul class="js-rating u-rating-v1 g-font-size-13 g-color-gray-light-v3 mb-0" data-hover-classes="g-color-primary">
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                          <li class="g-color-primary g-line-height-1_4">
                            <i class="fa fa-star"></i>
                          </li>
                        </ul>
                        <!-- End Rating -->

                        <span class="d-block g-color-gray-dark-v5 g-font-size-11">June 7, 2017</span>
                      </div>
                      <div class="ml-auto">
                        <a class="u-link-v5 g-color-black g-color-primary--hover g-font-size-12 text-uppercase" href="#!">Reply</a>
                      </div>
                    </div>

                    <p>We get it, you're busy and it's important that someone keeps up with marketing and driving people to your brand. We've got you covered.</p>

                    <ul class="list-inline my-0">
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-medical-022 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 0
                        </a>
                      </li>
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-finance-206 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 0
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Media -->
              </div>
              <!-- End Review -->

              <h2 class="h4 mb-5">Add Review</h2>

              <!-- Comment Form -->
              <form>
                <div class="row">
                  <div class="col-md-6 form-group g-mb-30">
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="First name">
                  </div>

                  <div class="col-md-6 form-group g-mb-30">
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="email" placeholder="Email">
                  </div>
                </div>
              </form>
              <!-- End Comment Form -->

              <div class="g-mb-30">
                <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="12" placeholder="Your message"></textarea>
              </div>

              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-md-3">
                  <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25" type="submit" role="button">Add Comment</button>
                </div>

                <!-- Rating -->
                <div class="col-5 col-sm-4 col-md-3">
                  <h3 class="h6 mb-1">Rate:</h3>

                  <ul class="js-rating u-rating-v1 g-font-size-20 g-color-gray-light-v3 mb-0" data-hover-classes="g-color-primary">
                    <li class="g-color-primary g-line-height-1_4 click">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="g-color-primary g-line-height-1_4 click">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="g-color-primary g-line-height-1_4 click">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="g-color-primary g-line-height-1_4 click">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="g-line-height-1_4">
                      <i class="fa fa-star"></i>
                    </li>
                  </ul>
                  <!-- End Rating -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Review -->

      <!-- Products -->
      <div class="container g-pt-100 g-pb-70">
        <div class="text-center mx-auto g-max-width-600 g-mb-50">
          <h2 class="g-color-black mb-4">Featured Products</h2>
          <p class="lead">We also inform you about latest upcomming models & spare parts.</p>
        </div>

        <!-- Products -->
        <div class="row">
          <div class="col-6 col-lg-3 g-mb-30">
            <!-- Product -->
            <figure class="g-pos-rel g-mb-20">
              <img class="img-fluid" src="<?=yii\helpers\Url::toRoute("/uploads/products/product1.jpg");?>" alt="Image Description">

              <figcaption class="w-100 g-bg-primary g-bg-black--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                <a class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover" href="#!">New Arrival</a>
              </figcaption>
            </figure>

            <div class="media">
              <!-- Product Info -->
              <div class="d-flex flex-column">
                <h4 class="h6 g-color-black mb-1">
                  <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                    Classic Red
                  </a>
                </h4>
                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Moped</a>
                <span class="d-block g-color-black g-font-size-17">$52.00</span>
              </div>
              <!-- End Product Info -->

              <!-- Products Icons -->
              <ul class="list-inline media-body text-right">
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Add to Cart">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
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

          <div class="col-6 col-lg-3 g-mb-30">
            <!-- Product -->
            <figure class="g-pos-rel g-mb-20">
              <img class="img-fluid" src="<?=yii\helpers\Url::toRoute("/uploads/products/product1.jpg");?>" alt="Image Description">

              <span class="u-ribbon-v1 g-width-40 g-height-40 g-color-white g-bg-primary g-font-size-13 text-center text-uppercase g-rounded-50x g-top-10 g-right-minus-10 g-px-2 g-py-10">-40%</span>
            </figure>

            <div class="media">
              <!-- Product Info -->
              <div class="d-flex flex-column">
                <h4 class="h6 g-color-black mb-1">
                  <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                    Classic Red
                  </a>
                </h4>
                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Moped</a>
                <span class="d-block g-color-black g-font-size-17">$99.00</span>
              </div>
              <!-- End Product Info -->

              <!-- Products Icons -->
              <ul class="list-inline media-body text-right">
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Add to Cart">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
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

          <div class="col-6 col-lg-3 g-mb-30">
            <!-- Product -->
            <figure class="g-pos-rel g-mb-20">
              <img class="img-fluid" src="<?=yii\helpers\Url::toRoute("/uploads/products/product1.jpg");?>" alt="Image Description">

              <figcaption class="w-100 g-bg-lightred text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                  <span class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1">Sold Out</span>
              </figcaption>
            </figure>

            <div class="media">
              <!-- Product Info -->
              <div class="d-flex flex-column">
                <h4 class="h6 g-color-black mb-1">
                  <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                    Classic Red
                  </a>
                </h4>
                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Moped</a>
                <span class="d-block g-color-black g-font-size-17">$49.99</span>
              </div>
              <!-- End Product Info -->

              <!-- Products Icons -->
              <ul class="list-inline media-body text-right">
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Add to Cart">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
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

          <div class="col-6 col-lg-3 g-mb-30">
            <!-- Product -->
            <figure class="g-pos-rel g-mb-20">
              <img class="img-fluid" src="<?=yii\helpers\Url::toRoute("/uploads/products/product1.jpg");?>" alt="Image Description">
            </figure>

            <div class="media">
              <!-- Product Info -->
              <div class="d-flex flex-column">
                <h4 class="h6 g-color-black mb-1">
                  <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                    Classic Red
                  </a>
                </h4>
                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Moped</a>
                <span class="d-block g-color-black g-font-size-17">$82.37</span>
              </div>
              <!-- End Product Info -->

              <!-- Products Icons -->
              <ul class="list-inline media-body text-right">
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Add to Cart">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
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
      </div>
      <!-- End Products -->