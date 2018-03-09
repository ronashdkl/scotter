<?php
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Language;
use dosamigos\tinymce\TinyMce;
/* @var $this yii\web\View */
/* @var $model app\models\ProductContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    if($model->product_id==null){
   echo  $form->field($model, 'product_id')->textInput(['maxlength' => true]);
    } ?>



    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'summary')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

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
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	        <?= Html::a( Yii::t('app', 'Go Back'),'/admin/product/view?id='.\app\helpers\Encription::encryptIt($model->product_id), ['class' =>  'btn btn-link']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
