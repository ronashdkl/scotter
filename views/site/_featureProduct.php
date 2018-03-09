<?php
use app\helpers\Configuration;
if(count($featureProducts)>0){
    ?>
    <div class="container g-pb-100">
        <div class="text-center mx-auto g-max-width-600 g-mb-50">
            <h2 class="g-color-black mb-4"><?= Configuration::get('feature_products')?></h2>
            <p class="lead"><?= Configuration::get('feature_products_sub_header')?></p>
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