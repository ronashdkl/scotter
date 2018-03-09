<?php
use yii\helpers\Url;
use kartik\grid\GridView;
use app\helpers\Configuration;
use app\models\Attribute;
use app\helpers\Encription;
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
        'attribute'=>'name',
    ],
 /*   [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'value',
    ],*/
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'type',
        'filterType' => GridView::FILTER_SELECT2,
        'filter' => Attribute::TYPE_ARRAY,
        'filterWidgetOptions' => [
            'pluginOptions' => ['allowClear' => true],
        ],
        'filterInputOptions' => ['placeholder' => 'Type'],
        'format' => 'raw',
        'value' => function ($model) {
            return Attribute::getType($model->type);
        }
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'lang',
        'filterType' => GridView::FILTER_SELECT2,
        'filter' => \app\models\Language::getLanguageList(),
        'filterWidgetOptions' => [
            'pluginOptions' => ['allowClear' => true],
        ],
        'filterInputOptions' => ['placeholder' => 'Type'],
        'format' => 'raw',
        'value' => function ($model) {
            return $model->language->name;
        }
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>Encription::encryptIt($key)]);
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