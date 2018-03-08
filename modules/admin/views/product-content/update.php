<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'Update');
$this->params['breadcrumbs'][] = "Product";

$this->params['breadcrumbs'][] = ['label'=>$model->title,'url'=> '/admin/product/view?id='.\app\helpers\Encription::encryptIt($model->product_id)];
$this->params['breadcrumbs'][] = $this->title;
/* @var $this yii\web\View */
/* @var $model app\models\ProductContent */
?>


<div class="row">
    <div class="col-sm-12 ">
        <div class="box">
            <div class="box-body">
                <div class="product-content-update">

                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>

                </div>

            </div>
        </div>

    </div>
    <div class="col-sm-12"></div>
</div>

