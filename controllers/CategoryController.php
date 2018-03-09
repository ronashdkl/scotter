<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;
use yii\web\Controller;
use app\helpers\Configuration;

class CategoryController extends Controller
{
	public function actionIndex($category,$product=false,$sku=false)
	{
	    if($product==false && $sku ==false){
	        $category = Category::findOne(['title'=>$category]);
            return $this->render("index",['category'=>$category,]);

        }else{
            $product = Product::findOne(['sku'=>$sku]);
            $featureProducts = Product::find()->where(['feature'=>Configuration::YES])->limit(25)->all();

            return $this->render('product',['product'=>$product,'featureProducts'=>$featureProducts]);
        }

	}

    public function actionProduct($product,$sku)
    {

	}
}
?>