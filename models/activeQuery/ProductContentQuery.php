<?php

namespace app\models\activeQuery;

/**
 * This is the ActiveQuery class for [[\app\models\ProductContent]].
 *
 * @see \app\models\ProductContent
 */
use app\helpers\Configuration;
class ProductContentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\ProductContent[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\ProductContent|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
    public function lang($db=null)

    {
        return self::andWhere(['lang'=>Configuration::getDefaultLanguage()])->one();
    }
}
