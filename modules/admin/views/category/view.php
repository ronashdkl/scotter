<?php

use yii\widgets\DetailView;
use yii\helpers\Url;
use app\models\Category;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
$this->title = Yii::t('config', 'Categories');
$this->params['breadcrumbs'][] = $this->title;

$isParentExists = $model->getCategories()->exists();


?>


<div class="box">

    <div class="box-body">
        <div class="row">
            <div class="col-sm-12 col-md-8">

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [

                        'title',
                        [
                            'attribute' => 'show_in_menu',
                            'value' => function ($model) {
                                return \app\helpers\Configuration::getStatus($model->show_in_menu);
                            }
                        ],
                        [
                            'attribute' => 'menu_type',
                            'value' => function ($model) {
                                return \app\helpers\Configuration::getStatus($model->menu_type);
                            }
                        ],
                        ['attribute'=>'parent',
                        'value' => function ($model) {
                            return (!empty($model->parentCategory->title)) ? \yii\helpers\Html::a(ucfirst($model->parentCategory->title), '/admin/category/view?id=' . \app\helpers\Encription::encryptIt($model->parent)) : "N/A";
                        },
                        'format' => 'raw',

                        'visible' => ($model->getParentCategory()->count() > 0) ? true : false

                    ],

                    [
                        'attribute' => 'Option',
                        'value' => function ($model) {
                            return \yii\helpers\Html::a('Delete', '/admin/category/delete?id=' . \app\helpers\Encription::encryptIt($model->id), ['class' => 'btn btn-danger', 'data' => [
                                    'confirm' => Yii::t('app', "Are you sure you want to delete {this}?", ['this' => $model->title]),
                                    'method' => 'post',
                                ],]) . " " . \yii\helpers\Html::a('Update', '/admin/category/update?id=' . \app\helpers\Encription::encryptIt($model->id), ['role' => 'modal-remote', 'class' => 'btn btn-info',
                                ]);
                        },
                        'format' => 'raw'
                    ]

                ],
                ]) ?>

            </div>
            <div class="col-sm-12 col-md-4">

                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><?= Yii::t('app', 'Products') ?></span>
                        <span class="info-box-number"><?= $model->getProducts()->count() ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>

            </div>
        </div>

    </div>
</div>
<div class="divider">

</div>
<div class="">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <?= $this->render('_tabs', ['model' => $model]) ?>

        </div>

        <div class="col-sm-12 col-md-4 ">
            <?php

            if ($isParentExists){
            ?>
            <div class="box">

                <div class="box-body  box-success">
                    <?php

                    $categories = $model->getCategories()->all();
                    $data = [];
                    $subCat = [];
                    foreach ($categories as $cat){


                    $data[] = ['url' => Url::toRoute('/admin/category/view?id='.\app\helpers\Encription::encryptIt($cat->id)),
                    'label' => ucfirst($cat->getName()),];
                    }

                    ?>
                        <?= dmstr\widgets\Menu::widget(
                    ['options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                    'items' => [['label' => 'Sub Categories', 'options' => ['class' => 'header']],

                    ['url' => Url::toRoute('/admin/category'),
                    'label' => $model->title,
                    'icon' => 'file',
                    'items' => $data]],]
                    ) ?>
                </div>
            </div>
            <?php } ?>
                <?= $this->render('_avatarUpload', ['model' => new \app\models\Media(), 'model1' => $model]) ?>

        </div>


    </div>
</div>


