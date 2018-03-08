<?php

namespace app\controllers;

use app\models\Product;
use Yii;
use yii\web\Controller; 

class CategoryController extends Controller
{
	public function actionIndex($category)
	{

		return $this->render("/index");
	}

    public function actionProduct($product,$sku)
    {
        $product = Product::findOne(['sku'=>$sku]);
        return $this->render('product',['product'=>$product]);
	}
}
?>