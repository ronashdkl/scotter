<?php
/**
 * Created by PhpStorm.
 * User: rnsdk
 * Date: 2/28/2018
 * Time: 11:21 AM
 */

namespace app\modules\api\controllers;


use app\models\Language;
use Yii;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;
use yii\filters\auth\HttpBasicAuth;
use yii\web\Response;

class LanguageController extends ActiveController
{

    public $modelClass = 'app\models\Language';


    public function init()
    {
        parent::init();
        Yii::$app->response->format = Response::FORMAT_JSON;
    }

    public function behaviors()
    {
        return [
            [
                'class' => \yii\filters\ContentNegotiator::className(),
                'formats' => [
                    'application/json' => \yii\web\Response::FORMAT_JSON,
                ],
            ],
        ];
    }

    public function actionList()
    {
        return ArrayHelper::map(Language::find()->all(),'id','name');
    }


}