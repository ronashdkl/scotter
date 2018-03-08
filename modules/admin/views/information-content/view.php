<?php

use yii\widgets\DetailView;
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = Yii::t('app', 'Informations');
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = $model->information->machine_name;
$this->params['breadcrumbs'][] = "View";
/* @var $this yii\web\View */
/* @var $model app\models\InformationContent */
?>

<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
              <h3> <?= $model->name?> <small><?= ($model->heading)?$model->heading: null?></small></h3>
            </div>
            <div class="box-body">
                <?= $model->description?>
            </div>
            <div class="box-footer">
                <?= Html::a('Go Back','/admin/information/view?id='.$model->information_id,['class'=>'btn btn-info'])?>
                <?= Html::a('Update','/admin/information-content/update?id='.$model->id,['class'=>'btn btn-success'])?>
            </div>
        </div>
    </div>
</div>
