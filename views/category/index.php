<?php
$this->title= $category->getName();
$this->params['breadcrumbs'][] = ['label'=>ucfirst(Yii::$app->controller->id),'url'=>'#'];
$this->params['breadcrumbs'][] = ['label'=>ucfirst(Yii::$app->request->getQueryParam('category')),'url'=>'#'];


?>



