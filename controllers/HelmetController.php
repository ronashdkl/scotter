<?php

namespace app\controllers;

use Yii; 
use yii\web\Controller; 

class HelmetController extends Controller
{
	public function actionIndex()
	{
		return $this->render("/site/helmet");
	}
}
?>