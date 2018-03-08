<?php
/**
 * Created by PhpStorm.
 * User: rnsdk
 * Date: 2/26/2018
 * Time: 12:13 PM
 *
 */
use kartik\form\ActiveForm;
use yii\helpers\Html;
?>
<div class="product-form">

    <?php $form = ActiveForm::begin(
            [
        'action' => ['/admin/product/index'],
        'method' => 'post'
                ]
    ); ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'feature')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'actual_price')->textInput() ?>

    <?= $form->field($model, 'sale_price')->textInput() ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= $form->field($model, 'avatar')->textInput() ?>

    <?= $form->field($model, 'additional_image')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'sku')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::submitButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

