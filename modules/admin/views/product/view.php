<?php

use yii\bootstrap\Modal;
use yii\widgets\DetailView;
use app\helpers\Configuration;
use kartik\editable\Editable;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = $model->getName();

$currency = \app\helpers\Configuration::get('currency');
?>

<div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="">
            <div class="">
                <div class="product-view">
<?= $this->render('_tabs',['model'=>$model]);?>


                </div>

            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green">
                <div class="widget-user-image">
                    <?php
                    if($model->hasAvatar()){
                        ?>
                        <img class="img-circle" src="<?= $model->getAvatar()?>" alt="User Avatar">

                        <?php
                    }
                    ?>
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username"><?= $model->getAttribute('sku')?></h3>
                <h5 class="widget-user-desc"><?= $model->category->getName()?></h5>
            </div>
            <div class="box-footer no-padding">
                <table class="table">
                    <tr>
                        <td><?= $model->getAttributeLabel('sale_price')?></td>
                        <td><?php
                            echo Configuration::get('currency')." ".   Editable::widget([
                                    'model'=>$model,
                                    'attribute'=>'sale_price',
                                    //'url'=>'/admin/product/inline-update?type='.\app\helpers\Encription::encryptIt('sale_price')."&product=".\app\helpers\Encription::encryptIt($model->id),
                                    'asPopover' => false,

                                    'header' => $model->getAttributeLabel('sale_price'),
                                    'size'=>'sm',

                                    'options' => ['class'=>'form-control', 'placeholder'=>'']
                                ]);
                            ?></td>
                    </tr>
                    <tr>
                        <td><?= $model->getAttributeLabel('actual_price')?></td>
                        <td><?php
                            echo Configuration::get('currency')." ".   Editable::widget([
                                    'model'=>$model,
                                    'attribute'=>'actual_price',
                                    //'url'=>'/admin/product/inline-update?type='.\app\helpers\Encription::encryptIt('sale_price')."&product=".\app\helpers\Encription::encryptIt($model->id),
                                    'asPopover' => false,

                                    'header' => $model->getAttributeLabel('actual_price'),
                                    'size'=>'sm',

                                    'options' => ['class'=>'form-control', 'placeholder'=>'']
                                ]);
                            ?> </td>
                    </tr>
                    <tr>
                        <td><?= $model->getAttributeLabel('stock')?> </td>
                        <td class="">
                            <?php
                            echo    Editable::widget([
                                    'model'=>$model,
                                    'attribute'=>'stock',
                                    'asPopover' => false,
                                    'header' => $model->getAttributeLabel('stock'),
                                    'size'=>'sm',
                                    'options' => ['class'=>'form-control', 'placeholder'=>'']
                                ]);
                            ?>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <?= $model->getAttributeLabel('feature')?>
                        </td>
                        <td>
                            <?php
                            echo  Editable::widget([
                                'model'=>$model,
                                'attribute'=>'feature',
                                'asPopover' => false,
                                'header' => $model->getAttributeLabel('feature'),
                                'inputType' => Editable::INPUT_DROPDOWN_LIST,
                                'data' => Configuration::FEATURE_ARRAY,
                                'displayValueConfig'=> Configuration::FEATURE_ARRAY,
                                'size'=>'sm',
                                'options' => ['class'=>'form-control', 'placeholder'=>'']
                            ]);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $model->getAttributeLabel('status')?>
                        </td>
                        <td>
                            <?php
                            echo  Editable::widget([
                                'model'=>$model,
                                'attribute'=>'status',
                                'asPopover' => false,
                                'header' => $model->getAttributeLabel('status'),
                                'inputType' => Editable::INPUT_DROPDOWN_LIST,
                                'data' => Configuration::STATUS_ARRAY,
                                'displayValueConfig'=> Configuration::STATUS_ARRAY,
                                'size'=>'sm',
                                'options' => ['class'=>'form-control', 'placeholder'=>'']
                            ]);
                            ?>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <?= $this->render('_avatarUpload',['model'=>new \app\models\Media(),'model1'=>$model])?>
    </div>
</div>


<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin,
    'size'=>Modal::SIZE_LARGE,
    'options' => ['tabindex' => '']
])?>
<?php Modal::end(); ?>