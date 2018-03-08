<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Language;
use kartik\markdown\MarkdownEditor;
/* @var $this yii\web\View */
/* @var $model app\models\CategoryContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'category_id')->hiddenInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php
    if($model->isNewRecord) {
        echo $form->field($model, 'lang')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Language::find()->all(), 'id', 'name'),
            'options' => ['placeholder' => 'Select a language ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    }
     ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('config', 'Create') : Yii::t('config', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
