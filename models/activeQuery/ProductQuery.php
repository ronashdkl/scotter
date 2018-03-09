<?php

namespace app\models\activeQuery;

/**
 * This is the ActiveQuery class for [[\app\models\Product]].
 *
 * @see \app\models\Product
 */
use app\helpers\Configuration;
class ProductQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\Product[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Product|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    /**
     * @param null $db
     * @return $this
     */
    public function active($db = null)
    {
        return self::andWhere(['status'=>Configuration::ACTIVE]);
    }
    /**
     * @param null $db
     * @return $this
     */
    public function inActive($db = null)
    {
        return self::andWhere(['status'=>Configuration::INACTIVE]);
    }

    /**
     * @param $yesOrNo
     * @return $this
     */
    public function feature($yesOrNo)
    {
        return self::andWhere(['feature'=>$yesOrNo]);
    }
    /**
     * @param null $db
     * @return $this
     */
    public function lang($db=null)

    {
        return self::andWhere(['lang'=>Configuration::getDefaultLanguage()]);
    }
}
