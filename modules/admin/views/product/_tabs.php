<?php
/**
 * Created by PhpStorm.
 * User: rnsdk
 * Date: 2/26/2018
 * Time: 11:12 AM
 */
use yii\widgets\DetailView;

?>

<div class="nav-tabs-custom">
    <ul class="nav nav-tabs ">
        <li class="active"><a href="#tab_1-1" data-toggle="tab" aria-expanded="false">Language</a></li>
        <li class=""><a href="#tab_3-3" data-toggle="tab" aria-expanded="false">Information</a></li>
        <li class=""><a href="#tab_4-4" data-toggle="tab" aria-expanded="false">Attributes</a></li>
        <li class=""><a href="#tab_5-1" data-toggle="tab" aria-expanded="false">Images</a></li>
        <li class=""><a href="#tab_2-2" data-toggle="tab" aria-expanded="false">History</a></li>


    </ul>
    <div class="tab-content">

        <div class="tab-pane active" id="tab_1-1">
            <?php
            $searchModel = new \app\models\search\ProductContentSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
            $dataProvider->query->andFilterWhere(['product_id' => $model->id]);
            echo Yii::$app->controller->renderPartial('/product-content/index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'model' => $model,
                'render' => 1
            ])

            ?>
        </div>
        <div class="tab-pane " id="tab_2-2">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [

                    'created_at',
                    'updated_at',

                ],
            ]) ?>

        </div>
        <div class="tab-pane " id="tab_4-4">
            <?php
            $searchModel = new \app\models\search\ProductAttributeSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
            $dataProvider->query->andFilterWhere(['product_id' => $model->id]);
            echo Yii::$app->controller->renderPartial('/product-attribute/index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'model' => $model,
                'render' => 1
            ])

            ?>

        </div>
        <div class="tab-pane " id="tab_5-1">
            <?= $this->render('_imagesUpload', ['model' => new \app\models\Media(), 'model1' => $model]) ?>


        </div>
        <div class="tab-pane " id="tab_3-3">
            <div class="product-content-view">

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'name',
                        'summary:ntext',
                        [
                            'attribute' => 'description',
                            'format' => 'raw'
                        ],
                        'type',

                    ],
                ]) ?>

            </div>

        </div>
    </div>

    <!-- /.tab-pane -->
</div>
<!-- /.tab-content -->

