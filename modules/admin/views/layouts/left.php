<?php
use yii\helpers\Url;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <?php
        //load from session
        if (\app\helpers\Configuration::get('	load_configuration_from_session')) {


            if (Yii::$app->session->has('categories')) {
                $categories = Yii::$app->session->get('categories');

            } else {
                Yii::$app->session->set('categories', \app\models\Category::find()->all());
                $categories = Yii::$app->session->get('categories');

            }
            if (Yii::$app->session->has('information')) {
                $informations = Yii::$app->session->get('information');

            } else {
                Yii::$app->session->set('information', \app\models\Information::find()->orderBy('position')->all());
                $informations = Yii::$app->session->get('information');

            }

        } else {
            $categories = \app\models\Category::find()->all();
            $informations = \app\models\Information::find()->orderBy('position')->all();
        }

        $data = [];
        $information = [];

        foreach ($informations as $info) {
            $information[] = [
                'url' => '/admin/information/view?id=' . $info->id,
                'label' => ucfirst($info->machine_name),
            ];
        }
        foreach ($categories as $cat) {

            if ($cat->parent == null) {
                $data[] = [
                    'url' => Url::toRoute('/admin/category/view?id=' . \app\helpers\Encription::encryptIt($cat->id)),
                    'label' => ucfirst($cat->getName()),


                ];
            }


        }
        $data[] = [
            'url' => Url::toRoute('/admin/category'),
            'label' => 'All Categories',


        ];

        ?>

        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Main navigation', 'options' => ['class' => 'header']],

                    [
                        'url' => '/admin',
                        'label' => 'Home',
                        'icon' => 'home'
                    ],
                    ['url' => Url::toRoute('/admin/information'),
                        'label' => 'Information',
                        'icon' => 'file',
                        'items' => $information
                    ],

                    ['url' => Url::toRoute('/admin/category'),
                        'label' => 'Categories',
                        'icon' => 'file',
                        'items' => $data
                    ],
                    ['url' => Url::toRoute('/admin/product'),
                        'label' => 'Products',
                        'icon' => 'file',
                    ],
                    [
                        'url' => '/admin/attribute',
                        'label' => 'Attributes',
                        'icon' => 'file-o'
                    ],
                    [
                        'url' => '/admin/settings',
                        'label' => 'Settings',
                        'icon' => 'gear'
                    ],


                ],
            ]
        ) ?>

    </section>

</aside>
