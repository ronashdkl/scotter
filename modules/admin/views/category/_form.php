<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput() ?>
    <?php
     echo $form->field($model, 'parent')->widget(Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(),'id','title'),
        'options' => ['placeholder' => 'Select a category ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <?php
    echo $form->field($model, 'show_in_menu')->widget(Select2::classname(), [
        'data' => \app\helpers\Configuration::FEATURE_ARRAY,
        'options' => ['placeholder' => 'Select Yes or No'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <?php
    echo $form->field($model, 'menu_type')->widget(Select2::classname(), [
        'data' => \app\helpers\Configuration::MENU_ARRAY,
        'options' => ['placeholder' => 'Select Menu Type'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <?php
    echo $form->field($model, 'feature')->widget(Select2::classname(), [
        'data' => \app\helpers\Configuration::FEATURE_ARRAY,
        'options' => ['placeholder' => 'Select Yes or No'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('config', 'Create') : Yii::t('config', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
