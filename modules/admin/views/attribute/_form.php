<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\select2\Select2;
use app\models\Language;
/* @var $this yii\web\View */
/* @var $model app\models\Attribute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attribute-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?php

    echo $form->field($model, 'type')->widget(Select2::class, [
        'data' => $model::TYPE_ARRAY,
        'options' => ['placeholder' => 'Select type'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php

    echo $form->field($model, 'lang')->widget(Select2::class, [
        'data' => Language::getLanguageList(),
        'options' => ['placeholder' => 'Select a language ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
