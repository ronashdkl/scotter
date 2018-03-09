<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductContent */
?>
<div class="product-content-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'title',
            'summary:ntext',
            [
                'attribute' => 'description',
                'format' => 'raw'
            ],
            'type',
            'language.name',
        ],
    ]) ?>

</div>
