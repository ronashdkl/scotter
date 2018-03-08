<?php

namespace app\modules\developer;

/**
 * developer module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\developer\controllers';

    public $layout = '../../../../modules\admin\views\layouts\main';
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
