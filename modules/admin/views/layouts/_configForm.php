<?php
/**
 * Created by PhpStorm.
 * User: rnsdk
 * Date: 2/28/2018
 * Time: 6:06 PM
 */
use kartik\select2\Select2;
use app\helpers\Configuration;
use yii\bootstrap\Html;
?>
<div class="" id="">

    <form method="post">

        <h3 class="control-sidebar-heading">General Settings</h3>
        <div class="form-group">
            <label class="control-sidebar-subheading">
                Language
            </label>
            <?php

            echo Select2::widget([
                'id' => 'selLang',
                'name' => 'language',
                'value' => \app\helpers\Configuration::getDefaultLanguage(),
                'data' => \app\models\Language::getLanguageList(),
                'options' => ['placeholder' => 'Select Language'],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
                'pluginEvents' => [
                    "change" => "function() { 
                                
                                 $.post( '/admin/settings/language',{id:$('#selLang').val()}, function(data) {
                                location.reload();
                                 });
                           
                                 }",
                    /* "select2:opening" => "function() { log('select2:opening'); }",
                     "select2:open" => "function() { log('open'); }",
                     "select2:closing" => "function() { log('close'); }",
                     "select2:close" => "function() { log('close'); }",
                     "select2:selecting" => "function() { log('selecting'); }",
                     "select2:select" => "function() { log('select'); }",
                     "select2:unselecting" => "function() { log('unselecting'); }",
                     "select2:unselect" => "function() { log('unselect'); }"*/
                ]
            ]);
            ?>

        </div>


        <!-- /.form-group -->
    </form>

    <?= Html::beginForm(['/admin/settings/config'], 'post', ['id' => 'general_setting', 'enctype' => 'multipart/form-data']) ?>
    <div class="form-group">
        <?= Html::label('Site Name', 'site_name', ['class' => 'control-sidebar-subheading']) ?>
        <?= Html::textInput('site_name', \app\helpers\Configuration::get('site_name'), ['class' => 'form-control', 'id' => 'site_name']) ?>
    </div>
    <div class="form-group">
        <?= Html::label('Site Email', 'site_email', ['class' => 'control-sidebar-subheading']) ?>
        <?= Html::textInput('site_email', \app\helpers\Configuration::get('site_email'), ['class' => 'form-control', 'id' => 'site_email']) ?>
    </div>
    <div class="form-group">
        <?= Html::label('Site Address', 'site_address', ['class' => 'control-sidebar-subheading']) ?>
        <?= Html::textInput('site_address', \app\helpers\Configuration::get('site_address'), ['class' => 'form-control', 'id' => 'site_address']) ?>
    </div>
    <div class="form-group">
        <?= Html::label('Site Phone Number', 'site_phone_number', ['class' => 'control-sidebar-subheading']) ?>
        <?= Html::textInput('site_phone_number', \app\helpers\Configuration::get('site_phone_number'), ['class' => 'form-control', 'id' => 'site_phone_number']) ?>
    </div>
    <div class="form-group">
        <?= Html::label('FAX Number', 'fax', ['class' => 'control-sidebar-subheading']) ?>
        <?= Html::textInput('fax', \app\helpers\Configuration::get('fax'), ['class' => 'form-control', 'id' => 'fax']) ?>
    </div>

    <div class="form-group">
        <?= Html::label('Load from session', 'load_configuration_from_session', ['class' => 'control-sidebar-subheading']) ?>
        <?= Html::radio('load_configuration_from_session', (\app\helpers\Configuration::get('load_configuration_from_session') == 1) ? true : false, ['label' => 'Yes', 'value' => 1]) ?>
        <?= Html::radio('load_configuration_from_session', (\app\helpers\Configuration::get('load_configuration_from_session') == 0) ? true : false, ['label' => 'No', 'value' => 0]) ?>
    </div>
    <div class="form-group">
        <?= Html::label('Currency', 'currency', ['class' => 'control-sidebar-subheading']) ?>
        <?= Html::textInput('currency', \app\helpers\Configuration::get('currency'), ['class' => 'form-control', 'id' => 'currency']) ?>

    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php Html::endForm() ?>
    <div class="form-group">
        <label class="control-sidebar-subheading">
            Flush All Cache
            <a href="/admin/settings/flush" class="text-red pull-right"><i
                    class="fa fa-trash-o"></i></a>
        </label>
    </div>

</div>
