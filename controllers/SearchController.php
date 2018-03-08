<?php

namespace app\controllers;

use Yii; 
use yii\web\Controller; 

class SearchController extends Controller
{
	public function actionIndex()
	{
		return $this->render("/site/search");
	}
}
?>