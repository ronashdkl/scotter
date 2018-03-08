<?php

/* @var $this yii\web\View */
$this->title = 'Scooter | Online Shopping Site';
?> 


      <!-- Revolution Slider -->
      <div class="g-overflow-hidden" style="padding-top: 154px;">
        <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery" style="background-color:transparent;padding:0px;">
          <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
          <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>
                <?php
                foreach ($categories as $categorySlider){
                    ?>
                    <!-- SLIDE  -->
                    <li data-index="rs-2800"
                        data-transition="slidingoverlayhorizontal"
                         data-slotamount="default"
                        data-hideafterloop="0"
                        data-hideslideonmobile="off"
                        data-easein="default"
                        data-easeout="default"
                        data-masterspeed="default"
                        data-thumb="<?= $categorySlider->getAvatar()?>"
                        data-rotate="0" data-saveperformance="off"
                        data-title="Slide" data-param1="" data-param2=""
                        data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?= $categorySlider->getAvatar()?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper"
                             id="slide-<?= $categorySlider->id?>-layer-7"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full"
                             data-height="full"
                             data-whitespace="nowrap"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="off"
                             data-responsive="off"
                             data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"speed":5000,"to":"opacity:0;","ease":"Power4.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-<?= $categorySlider->id?>-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-160','-160','-130','-157']"
                             data-fontsize="['110','110','100','60']"
                             data-lineheight="['110','110','100','60']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 110px; line-height: 110px; font-weight: 700; color: rgba(255, 255, 255, 1.00);border-width:0px;letter-spacing:-7px;">
                            <?= $categorySlider->getName()?>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-<?= $categorySlider->id?>-layer-2"
                             data-x="['center','center','center','center']" data-hoffset="['-10','-10','-10','-10']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-8','-32']"
                             data-fontsize="['40','40','30','30']"
                             data-width="['640','640','480','360']"
                             data-height="none"
                             data-whitespace="['nowrap','nowrap','normal','normal']"

                             data-type="text"
                             data-typewriter='{"lines":"Special%20Offer:%20Free%20Shipping%20Today","enabled":"on","speed":"70","delays":"1%7C100","looped":"on","cursorType":"one","blinking":"on","word_delay":"off","sequenced":"on","hide_cursor":"off","start_delay":"1500","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
                             data-responsive_offset="on"

                             data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 8; min-width: 640px; max-width: 640px; white-space: nowrap; font-size: 40px; line-height: 40px; font-weight: 400; color: rgba(255, 255, 255, 1.00);border-width:0px;">
                       <?php
                       if($categorySlider->getCategories()->count()>0){
                           $data = "";
                           foreach ($categorySlider->getCategories()->all() as $subCategory){
                               $data.= $subCategory->getName().  "  ";
                           }
                          echo $data;

                       }
                       ?>
                        </div>

                        <!-- LAYER NR. 5 -->
                        <a href="<?= yii\helpers\Url::toRoute("/checkout/");?>" class="tp-caption rev-btn  tp-resizeme"
                           id="slide-<?= $categorySlider->id?>-layer-4"
                           data-x="['right','right','center','center']" data-hoffset="['660','550','0','0']"
                           data-y="['middle','middle','middle','middle']" data-voffset="['140','140','100','83']"
                           data-width="none"
                           data-height="none"
                           data-whitespace="nowrap"
                           data-type="button"
                           data-responsive_offset="on"
                           data-frames='[{"from":"x:-50px;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"150","ease":"Power2.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 0);bw:2px 2px 2px 2px;"}]'
                           data-textAlign="['left','left','left','left']"
                           data-paddingtop="[0,0,0,0]"
                           data-paddingright="[50,50,50,50]"
                           data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[50,50,50,50]"
                           style="z-index: 9; white-space: nowrap; font-size: 15px; line-height: 46px; font-weight: 700; color: rgba(255, 255, 255, 1.00);background-color:rgba(0, 0, 0, 0);border-color:rgba(255, 255, 255, 0.25);border-style:solid;border-width:2px;border-radius:4px 4px 4px 4px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:5px;cursor:pointer;">SHOP NOW
                        </a>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-<?= $categorySlider->id?>-layer-6"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['137','137','158','141']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 10; white-space: nowrap; font-size: 25px; line-height: 25px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-style:italic;border-width:0px;">or
                        </div>

                        <!-- LAYER NR. 7 -->
                        <a href="<?= yii\helpers\Url::toRoute("/product-details/");?>" class="tp-caption rev-btn  tp-resizeme"
                           id="slide-2800-layer-5"
                           data-x="['left','left','center','center']" data-hoffset="['660','550','0','0']"
                           data-y="['middle','middle','middle','middle']" data-voffset="['140','140','224','207']"
                           data-width="none"
                           data-height="none"
                           data-whitespace="nowrap"
                           data-type="button"
                           data-responsive_offset="on"
                           data-frames='[{"from":"x:50px;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"150","ease":"Power2.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 0);bw:2px 2px 2px 2px;"}]'
                           data-textAlign="['left','left','left','left']"
                           data-paddingtop="[0,0,0,0]"
                           data-paddingright="[50,50,50,50]"
                           data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[50,50,50,50]"

                           style="z-index: 11; white-space: nowrap; font-size: 15px; line-height: 46px; font-weight: 700; color: rgba(255, 255, 255, 1.00);background-color:rgba(0, 0, 0, 0);border-color:rgba(255, 255, 255, 0.25);border-style:solid;border-width:2px;border-radius:4px 4px 4px 4px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:5px;cursor:pointer;">VIEW DETAILS
                        </a>
                    </li>
                    <!-- END SLIDE  -->
                <?php
                }
                ?>

              <!-- SLIDE  -->
               <!-- END SLIDE  -->
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
          </div>
        </div>
      </div>
      <!-- End Revolution Slider -->

      <!-- Features -->
      <div class="g-brd-bottom g-brd-gray-light-v4">
        <div class="container g-py-30">
          <div class="row justify-content-center">
            <div class="col-md-4 mx-auto g-py-15">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-black g-font-size-30 g-pos-rel g-top-3 mr-4 icon-real-estate-048 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-font-weight-500 g-font-size-default text-uppercase">Free Shipping</span>
                  <span class="d-block g-color-gray-dark-v4">In 2-3 Days</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <div class="col-md-4 mx-auto g-brd-x--md g-brd-gray-light-v3 g-py-15">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-black g-font-size-30 g-pos-rel g-top-3 mr-4 icon-real-estate-040 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-font-weight-500 g-font-size-default text-uppercase">Free Returns</span>
                  <span class="d-block g-color-gray-dark-v4">No Questions Asked</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <!-- Media -->
            <div class="col-md-4 mx-auto g-py-15">
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-black g-font-size-30 g-pos-rel g-top-3 mr-4 icon-hotel-restaurant-062 u-line-icon-pro"></i>
                <div class="media-body text-left">
                  <span class="d-block g-font-weight-500 g-font-size-default text-uppercase">Free 24</span>
                  <span class="d-block g-color-gray-dark-v4">Days Storage</span>
                </div>
              </div>
              <!-- End Media -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Features -->


       <!-- Products -->
<?php
if(count($products)>0){
?>
      <div class="container g-pb-100">
        <div class="text-center mx-auto g-max-width-600 g-mb-50">
          <h2 class="g-color-black mb-4">New Products</h2>
          <p class="lead">We want to sell latest model of moped.</p>
        </div>

        <div id="carouselCus1" class="js-carousel g-pb-100 g-mx-minus-10"
             data-infinite="true"
             data-slides-show="4"
             data-lazy-load="ondemand"
             data-arrows-classes="u-arrow-v1 g-pos-abs g-bottom-0 g-width-45 g-height-45 g-color-gray-dark-v5 g-bg-secondary g-color-white--hover g-bg-primary--hover rounded"
             data-arrow-left-classes="fa fa-angle-left g-left-10"
             data-arrow-right-classes="fa fa-angle-right g-right-10"
             data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-20 text-center">
         <?php
         foreach ($products as $product){
             ?>
             <div class="js-slide">
                 <div class="g-px-10">
                     <!-- Product -->
                     <figure class="g-pos-rel g-mb-20">
                         <img style="width: 300px; height: 200px"   class="img-fluid" data-lazy="<?= $product->getAvatar()?>" alt="Image Description">
                     </figure>

                     <div class="media">
                         <!-- Product Info -->
                         <div class="d-flex flex-column">
                             <h4 class="h6 g-color-black mb-1">
                                 <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?= yii\helpers\Url::toRoute("/product-details/");?>">
                                    <?= $product->getName()?>
                                 </a>
                             </h4>
                             <span class="d-block g-color-black g-font-size-17"><?= $product->getPrice()?></span>
                         </div>
                         <!-- End Product Info -->

                         <!-- Products Icons -->
                         <ul class="list-inline media-body text-right">
                             <li class="list-inline-item align-middle mx-0">
                                 <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= yii\helpers\Url::toRoute("/checkout/");?>"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Add to Cart">
                                     <i class="icon-finance-100 u-line-icon-pro"></i>
                                 </a>
                             </li>
                             <li class=" align-middle mx-0">
                                 <a target="_blank" class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= yii\helpers\Url::toRoute("/admin/product/view?id=".\app\helpers\Encription::encryptIt($product->id));?>"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Edit Product">
                                     <i class="icon-pencil u-line-icon-pro"></i>
                                 </a>
                             </li>
                         </ul>
                         <!-- End Products Icons -->
                     </div>
                     <!-- End Product -->
                 </div>
             </div>

             <?php
         }
         ?>


        </div>
      </div>
<?php } ?>
      <!-- End Products -->

      <!-- Feature Products -->
<?php
if(count($featureProducts)>0){
?>
      <div class="container g-pb-100">
        <div class="text-center mx-auto g-max-width-600 g-mb-50">
          <h2 class="g-color-black mb-4">Featured Products</h2>
          <p class="lead">We also inform you about latest upcomming models & spare parts.</p>
        </div>

        <div id="carouselCus1" class="js-carousel g-pb-100 g-mx-minus-10"
             data-infinite="true"
             data-slides-show="4"
             data-lazy-load="ondemand"
             data-arrows-classes="u-arrow-v1 g-pos-abs g-bottom-0 g-width-45 g-height-45 g-color-gray-dark-v5 g-bg-secondary g-color-white--hover g-bg-primary--hover rounded"
             data-arrow-left-classes="fa fa-angle-left g-left-10"
             data-arrow-right-classes="fa fa-angle-right g-right-10"
             data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-20 text-center">


            <?php
            foreach ($featureProducts as $featureproduct){
                ?>
                <div class="js-slide">
                    <div class="g-px-10">
                        <!-- Product -->
                        <figure class="g-pos-rel g-mb-20">
                            <img style="width: 300px; height: 200px"   class="img-fluid" data-lazy="<?= $featureproduct->getAvatar()?>" alt="Image Description">
                        </figure>

                        <div class="media">
                            <!-- Product Info -->
                            <div class="d-flex flex-column">
                                <h4 class="h6 g-color-black mb-1">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?= yii\helpers\Url::toRoute("/product-details/");?>">
                                        <?= $featureproduct->getName()?>
                                    </a>
                                </h4>
                                <span class="d-block g-color-black g-font-size-17"><?= $featureproduct->getPrice()?></span>
                            </div>
                            <!-- End Product Info -->

                            <!-- Products Icons -->
                            <ul class="list-inline media-body text-right">
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= yii\helpers\Url::toRoute("/checkout/");?>"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                       title="Add to Cart">
                                        <i class="icon-finance-100 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class=" align-middle mx-0">
                                    <a target="_blank" class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="<?= yii\helpers\Url::toRoute("/admin/product/view?id=".\app\helpers\Encription::encryptIt($featureproduct->id));?>"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                       title="Edit Product">
                                        <i class="icon-pencil u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Products Icons -->
                        </div>
                        <!-- End Product -->
                    </div>
                </div>

                <?php
            }
            ?>


        </div>
      </div>
<?php } ?>
      <!-- End Products -->

      <!-- Promo Block -->
      <section class="g-bg-secondary g-pos-rel">
        <div class="container g-pt-100 g-pb-70">
          <div class="row justify-content-between align-items-center">
            <div class="col-md-8 col-lg-6 order-md-2 g-mb-30">
              <div class="g-pos-rel">
                <img class="img-fluid w-100" src="<?= yii\helpers\Url::toRoute('/uploads/products/product1.jpg')?>" alt="Image Description">
                <span class="u-icon-v1 g-width-85 g-height-85 g-brd-3 g-brd-white g-color-white g-bg-primary g-font-weight-300 g-font-size-22 rounded-circle g-pos-abs g-top-100 g-left-0 g-brd-around">
                  <i class="g-font-style-normal">$60
                    <span class="g-font-size-16">.00</span>
                  </i>
                </span>
              </div>
            </div>

            <div class="col-md-4 order-md-1 g-mb-30">
              <div class="g-mb-30">
                <h1 class="g-color-primary g-font-weight-400 g-font-size-40 mb-0">Most sold Items</h1>
                <h2 class="g-color-dark g-font-weight-300 g-font-size-75 g-line-height-1 mb-4"><a style="color:black;text-decoration: none;" href="<?= yii\helpers\Url::toRoute("/product-details/");?>">Classic Red</a></h2>
                <p class="lead">We want to create a range of beautiful, practical and modern outerwear that doesn't cost the earth.</p>
              </div>

              <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25 g-mb-70" href="<?= yii\helpers\Url::toRoute("/checkout/");?>">Shop Now</a> 
            </div>
          </div>
        </div>
      </section> 

      <!-- News -->
    

      