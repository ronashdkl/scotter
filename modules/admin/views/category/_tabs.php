<?php
/**
 * Created by PhpStorm.
 * User: rnsdk
 * Date: 2/26/2018
 * Time: 11:12 AM
 */
?>

<div class="nav-tabs-custom">
    <ul class="nav nav-tabs ">
        <li class="active"><a href="#tab_1-1" data-toggle="tab" aria-expanded="false">Content</a></li>



    </ul>
    <div class="tab-content">

        <div class="tab-pane active" id="tab_1-1">
            <?php
            $searchModel = new \app\models\search\CategoryContentSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
            $dataProvider->query->andFilterWhere(['category_id'=>$model->id]);
            echo Yii::$app->controller->renderPartial('/category-content/index',[
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'model'=>$model,
                'render'=>1
            ])

            ?>
        </div>





        </div>

        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
