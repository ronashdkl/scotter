<?php
use yii\helpers\Url;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Category;
use app\helpers\Configuration;


/*$categories = Category::find()->all();
$insert = [];
$remove = [];
foreach ($categories as $cat) {


if($cat->categories && $cat->parent==null){
    $remove[] = ['id' => $cat->id, 'title' => $cat->title];

}
    $insert[] = ['id' => $cat->id, 'title' => $cat->title, 'parent' => ($cat->parent!=null) ? $cat->parentCategory->title : "Other"];



}

$result = array_diff_key($insert, $remove);
$data = ArrayHelper::map($result, 'id', 'title', 'parent');*/


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
        'attribute' => 'category_id',
        'value' => 'category.title',
        'filterType' => GridView::FILTER_SELECT2,
        'filter' => Category::getSelectList(),
        'filterWidgetOptions' => [
            'pluginOptions' => ['allowClear' => true],
        ],
        'filterInputOptions' => ['placeholder' => 'Main Category'],
        'format' => 'raw',
        'group' => true
    ],

    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'name',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'sku',
    ],

    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'feature',
        'filterType' => GridView::FILTER_SELECT2,
        'filter' => Configuration::FEATURE_ARRAY,
        'filterWidgetOptions' => [
            'pluginOptions' => ['allowClear' => true],
        ],
        'filterInputOptions' => ['placeholder' => 'Feature'],
        'format' => 'raw',
        'value' => function ($model) {
            return Configuration::getStatus($model->feature);
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
    /*  [
          'class'=>'\kartik\grid\DataColumn',
          'attribute'=>'actual_price',
      ],
      [
          'class'=>'\kartik\grid\DataColumn',
          'attribute'=>'sale_price',
      ],*/
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'stock',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'avatar',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'additional_image',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'created_at',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'updated_at',
    // ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'sku',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign' => 'middle',
        'urlCreator' => function ($action, $model, $key, $index) {
            return Url::to([$action, 'id' => \app\helpers\Encription::encryptIt($key)]);
        },
        'viewOptions' => ['title' => 'View', 'data-toggle' => 'tooltip'],
        'updateOptions' => ['role' => 'modal-remote', 'title' => 'Update', 'data-toggle' => 'tooltip'],
        'deleteOptions' => ['role' => 'modal-remote', 'title' => 'Delete',
            'data-confirm' => false, 'data-method' => false,// for overide yii data api
            'data-request-method' => 'post',
            'data-toggle' => 'tooltip',
            'data-confirm-title' => 'Are you sure?',
            'data-confirm-message' => 'Are you sure want to delete this item'],
    ],

];   