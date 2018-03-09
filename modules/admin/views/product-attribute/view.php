<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductAttribute */
?>
<div class="product-attribute-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'productAttribute.name',

            [
                'attribute' => 'value',
                'value' => function ($model) {
                    return $model->getValue();
                },
                'format'=>'raw'
            ],
            [
                'attribute' => 'type',
                'value' => function ($model) {
                    return $model->getType();
                }
            ],
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->getStatus();
                }
            ],
            'language.name',
        ],
    ]) ?>

</div>
