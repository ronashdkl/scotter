<?php
use app\helpers\Configuration;
use kartik\grid\GridView;
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'attributes_id',
        'value'=>'productAttribute.name'
    ],

    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'value',
        'value'=>function($model){
    return $model->getValue();
        }
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'type',
        'filterType' => GridView::FILTER_SELECT2,
        'filter' => \app\models\Attribute::TYPE_ARRAY,
        'filterWidgetOptions' => [
            'pluginOptions' => ['allowClear' => true],
        ],
        'filterInputOptions' => ['placeholder' => 'Status'],
        'format' => 'raw',
        'value' => function ($model) {
            return $model->getType();
        }
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'status',
        'filterType' => GridView::FILTER_SELECT2,
        'filter' => Configuration::STATUS_ARRAY,
        'filterWidgetOptions' => [
            'pluginOptions' => ['allowClear' => true],
        ],
        'filterInputOptions' => ['placeholder' => 'Status'],
        'format' => 'raw',
        'value' => function ($model) {
            return Configuration::getStatus($model->status);
        }
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'lang',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to(['/admin/product-attribute/'.$action,'id'=>\app\helpers\Encription::encryptIt($key)]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   