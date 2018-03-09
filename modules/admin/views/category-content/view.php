<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CategoryContent */
?>
<div class="category-content-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'category.title',
            'name',
            'language.name',
        ],
    ]) ?>

</div>
