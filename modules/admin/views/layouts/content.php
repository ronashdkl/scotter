<?php
use kartik\editable\Editable;
use kartik\select2\Select2;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\web\View;
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

?>
    <div class="content-wrapper">
        <section class="content-header">
            <?php if (isset($this->blocks['content-header'])) { ?>
                <h1><?= $this->blocks['content-header'] ?></h1>
            <?php } else { ?>
                <h1>
                    <?php
                    if ($this->title !== null) {
                        echo \yii\helpers\Html::encode($this->title);
                    } else {
                        echo \yii\helpers\Inflector::camel2words(
                            \yii\helpers\Inflector::id2camel($this->context->module->id)
                        );
                        echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                    } ?>
                </h1>
            <?php } ?>

            <?=
            Breadcrumbs::widget(
                [
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]
            ) ?>
        </section>

        <section class="content">
            <?= Alert::widget() ?>
            <?= $content ?>
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; <?= date('Y') ?> <a
                    href="#" class="site-name"><?= \app\helpers\Configuration::get('site_name') ?></a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <!--  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

              <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
          </ul>-->
        <!-- Tab panes -->
        <div class="tab-content">


            <!-- Settings tab content -->
           <?= $this->render('_configForm')?>
            <!-- /.tab-pane -->
        </div>

    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class='control-sidebar-bg'></div>

<?php

$this->registerJs("
$(function () {
 $('#site_name').keyup(function() {
    var value = $( this ).val();
    $('.site-name' ).text( value );
  }).keyup();
  
        $('#general_setting').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: '/admin/settings/config',
            data: $('#general_setting').serialize(),
            success: function (data) {
        
             
            }
          });

        });

      });
");

?>