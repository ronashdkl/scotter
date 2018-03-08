<?php

use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use app\models\Attribute;
/* @var $this yii\web\View */
/* @var $model app\models\Attribute */
?>
<div class="attribute-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'name',
            [
                'attribute' => 'value',
                'value' => function ($model) {
                    return $model->value;
                },
                'format' => 'raw',
            ],
            [
                'attribute' => 'type',
                'value' => function ($model) {
                    return ArrayHelper::getValue(Attribute::TYPE_ARRAY, $model->type);
                }
            ],
            'language.name',
        ],
    ]) ?>

</div>
