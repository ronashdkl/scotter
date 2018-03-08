<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\slider\Slider;
use kartik\widgets\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Information */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="information-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'machine_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->widget(Select2::classname(), [
        'data' =>\app\helpers\Configuration::STATUS_ARRAY,
        'options' => ['placeholder' => 'Select status ...'],
        'pluginOptions' => [
            'allowClear' => false
        ],
    ]); ?>


    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
    <br/>
    <br/>
    <br/>
    <?= $form->field($model, 'position')->widget(Slider::classname(), [
        'sliderColor'=>Slider::TYPE_GREY,
        'handleColor'=>Slider::TYPE_DANGER,
        'pluginOptions'=>[
            'min'=>-50,
            'max'=>50,
            'step'=>1,

            'handle'=>'triangle',
            'tooltip'=>'always'

        ]
    ]); ?>
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
