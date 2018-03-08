<?php

namespace app\controllers;

use Yii; 
use yii\web\Controller; 

class CheckoutController extends Controller
{
	public function actionIndex()
	{
		return $this->render("/site/checkout");
	}
}
?>