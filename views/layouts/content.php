<?php
/**
 * Created by PhpStorm.
 * User: rnsdk
 * Date: 3/6/2018
 * Time: 12:48 PM
 */
use app\widgets\Breadcrumbs;


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

