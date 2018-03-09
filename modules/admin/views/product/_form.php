<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Category;
use app\helpers\Configuration;
/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php

    echo $form->field($model, 'category_id')->widget(Select2::class, [
        'data' => Category::getSelectList(),
        'options' => ['placeholder' => 'Select a category ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <div class="row">
        <div class="col-sm-12 col-md-6">
            <?= $form->field($model, 'sku')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'actual_price')->textInput() ?>

            <?= $form->field($model, 'sale_price')->textInput() ?>

            <?= $form->field($model, 'stock')->textInput() ?>
        </div>
        <div class="col-sm-12 col-md-6">

            <?php echo
            $form->field($model, 'feature')->widget(Select2::class, [
                'data' =>Configuration::FEATURE_ARRAY,
                'options' => ['placeholder' => 'Is Featured? '],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>

            <?php echo
            $form->field($model, 'status')->widget(Select2::class, [
                'data' =>Configuration::STATUS_ARRAY,
                'options' => ['placeholder' => 'Select Status '],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
    </div>






  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
