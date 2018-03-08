<?php
/**
 * Created by PhpStorm.
 * User: rnsdk
 * Date: 3/6/2018
 * Time: 12:48 PM
 */
use app\widgets\Breadcrumbs;
if(!$isFrontpage){
    $this->params['breadcrumbs'][] = ['label'=>ucfirst(Yii::$app->controller->action->id),'url'=>'#'];
    $this->params['breadcrumbs'][] = ['label'=>ucfirst(str_replace('/','', Yii::$app->request->getUrl()))];
}

?>
<!-- Breadcrumbs -->

<?=
Breadcrumbs::widget(
    [
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]
) ?>


<!-- End Breadcrumbs -->
<?php
//echo $isFrontpage;
echo $content;

?>

