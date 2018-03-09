<?php

namespace app\modules\admin\controllers;
use app\helpers\Configuration;
use Yii;
use yii\web\NotFoundHttpException;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class SettingsController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLanguage()
    {
        $request = Yii::$app->request;
        if($request->isAjax){
         $lag = $request->getBodyParam('id');
         $save = Configuration::updateValue(Configuration::DEFAULT_LANGUAGE, $lag);
          /* $config =  Configuration::findOne(['name'=>'default_language']);
           $config->value = $lag;
           $save = $config->save(false);*/
           if($save){
               $this->flush();
               return json_encode("Language has been changed");
           }

        }else{
            throw new NotFoundHttpException('The requested page does not exist.');

        }
    }


    public function actionFlush()
    {
       $this->flush();
        return $this->redirect('/admin');
    }

    public function actionConfig(){
        $req = Yii::$app->request;
        if(!$req->isAjax){
            throw new NotFoundHttpException("Page not found");
        }

        $params = $req->getBodyParams();
        $valid = false;
            foreach ($params as $paramKey=>$param){
                $save = Configuration::updateValue($paramKey,$param);
                if($save){
                    $valid = true;
                }

            }
            if($valid){
                $this->flush();
                return "saved";
            }
    }
    /**
     *
     */
    function flush(){
        \Yii::$app->session->open();
        \Yii::$app->session->destroy();
    }
}
