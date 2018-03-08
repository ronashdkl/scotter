<?php
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
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
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'title',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'parent',
        'value' => 'parentCategory.title',
        'filterType' => GridView::FILTER_SELECT2,
        'filter' => ArrayHelper::map(\app\models\Category::find()->where(['parent' => null])->asArray()->all(), 'id', 'title'),
        'filterWidgetOptions' => [
            'pluginOptions' => ['allowClear' => true],
        ],
        'filterInputOptions' => ['placeholder' => 'Main Category'],
        'format' => 'raw'
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'feature',
        'value' => function ($model) {
            return \app\helpers\Configuration::getStatus($model->feature);
        },
        'filterType' => GridView::FILTER_SELECT2,
        'filter' => \app\helpers\Configuration::FEATURE_ARRAY,
        'filterWidgetOptions' => [
            'pluginOptions' => ['allowClear' => true],
        ],
        'filterInputOptions' => ['placeholder' => 'Feature'],
        'format' => 'raw'
    ],
    /*  [
          'class'=>'\kartik\grid\DataColumn',
          'attribute'=>'Parent',
          'value'=>'parentCategory.title',

      ],*/
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign' => 'middle',
        'urlCreator' => function ($action, $model, $key, $index) {
            return Url::to([$action, 'id' => \app\helpers\Encription::encryptIt($key)]);
        },
        'viewOptions' => ['role' => '', 'title' => 'View', 'data-toggle' => 'tooltip'],
        'updateOptions' => ['role' => 'modal-remote', 'title' => 'Update', 'data-toggle' => 'tooltip'],
        'deleteOptions' => ['role' => 'modal-remote', 'title' => 'Delete',
            'data-confirm' => false, 'data-method' => false,// for overide yii data api
            'data-request-method' => 'post',
            'data-toggle' => 'tooltip',
            'data-confirm-title' => 'Are you sure?',
            'data-confirm-message' => 'Are you sure want to delete this item'],
    ],

];   