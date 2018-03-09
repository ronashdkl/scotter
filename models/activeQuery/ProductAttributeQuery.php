<?php

namespace app\models\activeQuery;

/**
 * This is the ActiveQuery class for [[\app\models\ProductAttribute]].
 *
 * @see \app\models\ProductAttribute
 */
class ProductAttributeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\ProductAttribute[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\ProductAttribute|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
