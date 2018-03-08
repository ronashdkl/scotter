<?php

use kartik\widgets\FileInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Media */
/* @var $form yii\widgets\ActiveForm */


if(isset($render))
{
    $render = true;
}else{
    $render = false;
}
?>

<div class="media-form">

    <?php $form = ActiveForm::begin(); ?>


    <?php
    echo $form->field($model, 'files[]')->widget(FileInput::class, [
        'options' => ['multiple' => true, 'accept' => 'image/*','id'=>uniqid()],
        'pluginOptions' => [
            'uploadUrl' => Url::toRoute(['/admin/media/upload?project='.$model->project_id.'&attribute='.$model->project_attribute_id]),
            'initialPreview' => ($model->hasImage())?$project->getImage()['url']:[],
            'initialPreviewAsData'=>true,
            'initialCaption'=>"Upload images",
            'initialPreviewConfig' =>($project->hasImage())? $project->getImage()['config']:[],
            'overwriteInitial'=>false,
            'previewFileType' => 'any',
            'browseClass' => 'btn btn-success',
            'showRemove' => true,
            'showUpload' => false,
            'mainClass' => 'input-group-sm'
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
