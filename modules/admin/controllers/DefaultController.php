<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionFlush()
    {
        \Yii::$app->session->open();
        \Yii::$app->session->destroy();
        return $this->redirect('/admin');
    }
}
