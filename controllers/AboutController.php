<?php

namespace app\controllers;

use Yii; 
use yii\web\Controller; 

class AboutController extends Controller
{
	public function actionIndex()
	{
		return $this->render("/site/about");
	}
}
?>