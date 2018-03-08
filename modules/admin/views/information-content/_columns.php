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
   /* [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'information_id',
    ],*/
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'heading',
    ],
/*    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'description',
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
        'filter'=>\app\models\Language::getLanguageList(),
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'Language'],
        'format'=>'raw'
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to(['/admin/information-content/'.$action,'id'=>$key]);
        },
        'updateOptions'=>['title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   