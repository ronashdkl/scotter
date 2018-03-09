<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name; 
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container g-pt-100 g-pb-70" style="margin-left: 400px;">
        <div class="row g-mb-20">
          <div class="col-md-6 g-mb-30">
                <div class="site-error container">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <div class="alert alert-danger">
                        <?= nl2br(Html::encode($message)) ?>
                    </div>

                    <p>
                        The above error occurred while the Web server was processing your request.
                    </p>
                    <p>
                        Please contact us if you think this is a server error. Thank you.
                    </p>

                </div>
            </div>
        </div>  
</div>             
