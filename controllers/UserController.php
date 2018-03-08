<?php

namespace app\controllers;

use Yii; 
use yii\web\Controller; 

class UserController extends Controller
{
	public function actionLogin()
	{
		return $this->render("/user/login");
	}
	public function actionRegister()
	{
		return $this->render("/user/register");
	}
	public function actionOrder()
	{
		return $this->render("/user/order");
	}
}
?>