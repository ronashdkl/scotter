<?php
use kartik\grid\GridView;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\Language;
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
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'title',
    ],
  /*  [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'summary',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'description',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'type',
    ],*/
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute' => 'lang',
        'value' => function($model){
            if(\app\helpers\Configuration::get('default_language')== intval($model->lang)){
                return "<strong>".$model->language->name."</strong>";
            }else{
                return $model->language->name;
            }
        },
        'filterType'=>GridView::FILTER_SELECT2,
        'filter'=>ArrayHelper::map(Language::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'Language'],
        'format'=>'raw'
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign' => 'middle',
        'urlCreator' => function ($action, $model, $key, $index) {
            return Url::to(['/admin/product-content/'.$action, 'id' => \app\helpers\Encription::encryptIt($key)]);
        },
        'viewOptions' => ['role' => 'modal-remote', 'title' => 'View', 'data-toggle' => 'tooltip'],
        'updateOptions' => [ 'title' => 'Update', 'data-toggle' => 'tooltip'],
        'deleteOptions' => ['role' => 'modal-remote', 'title' => 'Delete',
            'data-confirm' => false, 'data-method' => false,// for overide yii data api
            'data-request-method' => 'post',
            'data-toggle' => 'tooltip',
            'data-confirm-title' => 'Are you sure?',
            'data-confirm-message' => 'Are you sure want to delete this item'],
    ],

];   