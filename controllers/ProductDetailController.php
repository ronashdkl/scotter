<?php

namespace app\controllers;

use Yii; 
use yii\web\Controller; 

class ProductDetailController extends Controller
{
	public function actionIndex()
	{
		return $this->render("/site/product");
	}
}
?>