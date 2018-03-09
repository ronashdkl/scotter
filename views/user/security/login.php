<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use dektrium\user\widgets\Connect;
use dektrium\user\models\LoginForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module $module
 */

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .help-block{
        color: red;
        margin-left: 12px;
    }
</style>
<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

<!-- Login -->
<section class="container g-pt-100 g-pb-20">
    <div class="row justify-content-between">
        <div class="col-md-6 col-lg-5 order-lg-2 g-mb-80">
            <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
                <header class="text-center mb-4">
                    <h1 class="h4 g-color-black g-font-weight-400">Login to Your Account</h1>
                </header>

                <!-- Form -->
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'class'=>'g-py-15',
                    'enableAjaxValidation' => true,
                    'enableClientValidation' => false,
                    'validateOnBlur' => false,
                    'validateOnType' => false,
                    'validateOnChange' => false,
                ]) ?>

                    <div class="mb-4">
                        <div class="input-group g-rounded-left-3">
                    <span class="input-group-prepend g-width-45">
                      <span class="input-group-text justify-content-center w-100 g-bg-transparent g-brd-gray-light-v3 g-color-gray-dark-v5">
                        <i class="icon-finance-067 u-line-icon-pro"></i>
                      </span>
                    </span>


                                <?= $form->field($model, 'login',
                                    ['inputOptions' => ['class' => 'form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15']]
                                )->textInput()->input('text', ['placeholder' => "Username"])->label(false);;
                                ?>



                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="input-group g-rounded-left-3 mb-4">
                    <span class="input-group-prepend g-width-45">
                      <span class="input-group-text justify-content-center w-100 g-bg-transparent g-brd-gray-light-v3 g-color-gray-dark-v5">
                        <i class="icon-media-094 u-line-icon-pro"></i>
                      </span>
                    </span>

                            <?= $form->field($model, 'password',
                                ['inputOptions' => ['class' => 'form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15']]
                            )->textInput()->input('password', ['placeholder' => "Password"])->label(false);;
                            ?>
                             </div>
                    </div>

                    <div class="row justify-content-between mb-5">
                        <div class="col align-self-center">
                            <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-0">
                                <input  type="checkbox" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0"
                                       id="login-form-rememberme"
                                       name="login-form[rememberMe]" value="1">

                                <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                                Keep signed in
                            </label>
                        </div>
                        <div class="col align-self-center text-right">
                            <a class="g-font-size-13" href="page-password-recovery-1.html">Forgot password?</a>
                        </div>
                    </div>

                    <div class="mb-5">
                        <?= Html::submitButton(
                            Yii::t('app', 'Login'),
                            ['class' => 'btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25']
                        ) ?>

                    </div>

                    <div class="d-flex justify-content-center text-center g-mb-30">
                        <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                        <span class="align-self-center g-color-gray-dark-v5 mx-4">OR</span>
                        <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                    </div>

                    <div class="row no-gutters">
                        <div class="col-6">
                            <button class="btn btn-block u-btn-facebook g-font-size-12 text-uppercase g-py-12 g-px-25 mr-2" type="button">
                                <i class="mr-1 fa fa-facebook"></i>
                                Facebook
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-block u-btn-twitter g-font-size-12 text-uppercase g-py-12 g-px-25 ml-2" type="button">
                                <i class="mr-1 fa fa-twitter"></i>
                                Twitter
                            </button>
                        </div>
                    </div>
                <?php ActiveForm::end(); ?>
                <!-- End Form -->
            </div>

            <div class="text-center">
                <p class="g-color-gray-dark-v5 mb-0">Don't have an account?
                    <a class="g-font-weight-600" href="<?= yii\helpers\Url::toRoute('/user/register/')?>">signup</a></p>
            </div>
        </div>

        <div class="col-md-6 order-lg-1 g-mb-80">
            <div class="mb-5">
                <h2 class="h1 g-font-weight-400 mb-3">Welcome to Scooter shop</h2>
                <p class="g-color-gray-dark-v4">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <!-- Icon Blocks -->
                    <div class="media mb-5">
                        <div class="d-flex mr-3">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-168 u-line-icon-pro"></i>
                    </span>
                        </div>
                        <div class="media-body align-self-center">
                            <h3 class="h5 g-font-weight-400">Reliable contracts</h3>
                            <p class="g-color-gray-dark-v5 mb-0">Reliable contracts, multifanctionality &amp; best usage of Unify template</p>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->

                    <!-- Icon Blocks -->
                    <div class="media mb-5">
                        <div class="d-flex mr-3">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-193 u-line-icon-pro"></i>
                    </span>
                        </div>
                        <div class="media-body align-self-center">
                            <h3 class="h5 g-font-weight-400">Security</h3>
                            <p class="g-color-gray-dark-v5 mb-0">Secure &amp; integrated options to create individual &amp; business websites</p>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->

                    <!-- Icon Blocks -->
                    <div class="media">
                        <div class="d-flex mr-3">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-122 u-line-icon-pro"></i>
                    </span>
                        </div>
                        <div class="media-body align-self-center">
                            <h3 class="h5 g-font-weight-400">Maintain</h3>
                            <p class="g-color-gray-dark-v5 mb-0">We get it, you're busy and it's important that someone keeps up with marketing</p>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login -->
