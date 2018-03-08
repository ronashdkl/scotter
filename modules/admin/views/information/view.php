<?php

use yii\widgets\DetailView;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('config', 'Information');
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = $model->machine_name;
/* @var $this yii\web\View */
/* @var $model app\models\Information */
?>
<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="information-view">

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [

                            'machine_name',
                            [
                                    'attribute'=>'status',
                                'value'=>function($model){
                        return \app\helpers\Configuration::getStatus($model->status);
                                }
                            ],
                            'position',
                            'slug',
                            [
                                'attribute' => 'Action',
                                'value' => function ($model) {
                                    return Html::a('Update', Url::toRoute('/admin/information/update?id=' . $model->id), ['class' => 'btn btn-info']) . " " . Html::a('Delete', Url::toRoute('/admin/information/delete?id=' . $model->id), ['class' => 'btn btn-danger', 'data' => [
                                            'confirm' => Yii::t('app', "Are you sure you want to delete {this}?", ['this' => $model->machine_name]),
                                            'method' => 'post',


                                        ],]);
                                },
                                'format' => 'raw'
                            ]
                        ],
                    ]) ?>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="box ">
           <div class="box-body">
               <?php
               $searchModel = new \app\models\search\InformationContentSearch();
               $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
               $dataProvider->query->andFilterWhere(['information_id'=>$model->id]);
               echo Yii::$app->controller->renderPartial('/information-content/index',[
                   'searchModel' => $searchModel,
                   'dataProvider' => $dataProvider,
                   'model'=>$model,
                   'render'=>1
               ])

               ?>
           </div>
        </div>
    </div>
</div>


