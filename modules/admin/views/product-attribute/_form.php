<?php
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\ProductAttribute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-attribute-form">
<div class="box bg-info">
    <div class="box-header">
        <i>Either attributes or new attribute is required. If new attribute is filled up than selected attributes should be un selected.</i>
    </div>
</div>
    <?php $form = ActiveForm::begin([
            'id'=>'p_a',


    ]); ?>

    <?php

    echo $form->field($model, 'attributes_id')->widget(Select2::class, [
        'data' => \app\models\Attribute::getAttributeList(),
        'options' => ['placeholder' => 'Select a attribute ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'addAttribute')->textInput() ?>
    <p>Add new attribute if above select menu does not have desire attributes. </p>

    <?= $form->field($model, 'value')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?php

    echo $form->field($model, 'type')->widget(Select2::class, [
        'data' => \app\models\Attribute::TYPE_ARRAY,
        'options' => ['placeholder' => 'Select type'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php

    echo $form->field($model, 'status')->widget(Select2::class, [
        'data' => \app\helpers\Configuration::STATUS_ARRAY,
        'options' => ['placeholder' => 'Select status'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php
    $model->lang = 1;
    echo $form->field($model, 'lang')->widget(Select2::class, [
        'data' =>\app\models\Language::getLanguageList(),
        'value'=>1,
        'options' => ['placeholder' => 'Select Language'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>


    <?php if (!Yii::$app->request->isAjax) { ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("
//$('#p-a').yiiActiveForm('validate', true);
");
?>