<?php
/**
 * Created by PhpStorm.
 * User: rnsdk
 * Date: 3/2/2018
 * Time: 11:35 AM
 */
use yii\bootstrap\ActiveForm;
use kartik\widgets\FileInput;
use yii\helpers\Url;

?>
<div class="box">
    <div class="box-header">
        <h3>Avatar</h3>
    </div>
    <div class="box-body">
        <?php $form = ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
        ]); ?>
        <?php  echo $form->field($model, 'uploads')->widget(FileInput::class, [
            'options' => ['multiple' => false, 'accept' => 'image/*','id'=>uniqid()],
            'pluginOptions' => [
                'uploadUrl' => Url::toRoute(['/admin/media/upload?identity='.\app\models\Product::PRODUCT_AVATAR_ID.$model1->id."&type=".$model::AVATAR]),
                'initialPreview'=>($model1->hasAvatar())? $model1->getAvatar(true)['url']:[],
                'initialPreviewAsData'=>true,
                'initialCaption'=>"Upload Avatar",
                'initialPreviewConfig' => ($model1->hasAvatar())?$model1->getAvatar(true)['config']:[],
                'overwriteInitial'=>true,
                'maxFileSize'=>0,
                'showRemove' => true,
                'showUpload' => false,
               // 'showBrowse' => ($model1->hasAvatar())?false:true,

            ]
           /* 'pluginOptions' => [
              //  'uploadUrl' => Url::toRoute(['/admin/media/upload?identity='.\app\models\Product::PRODUCT_AVATAR_ID.$model->id]),
                'initialPreview' => $model->getAvatar()['url'],
                'initialPreviewAsData'=>true,
                'initialCaption'=>"Upload images",
                'initialPreviewConfig' =>$model->getAvatar()['config'],
                'overwriteInitial'=>false,
                'previewFileType' => 'any',
                'browseClass' => 'btn btn-success',
                'showRemove' => true,
                'showUpload' => true,
                'mainClass' => 'input-group-sm'
            ]*/
        ])->label(false);
        ?>

        <?php ActiveForm::end(); ?>
    </div>
</div>
