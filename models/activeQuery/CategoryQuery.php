<?php


namespace app\models\activeQuery;



/**
 * This is the ActiveQuery class for [[\app\models\Category]].
 *
 * @see \app\models\Category
 */

use app\helpers\Configuration;
class CategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\Category[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Category|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    /**
     * @param null $db
     * @return \app\models\Category|array|null
     */
    public function lang($db=null)

    {
        return self::andWhere(['lang'=>Configuration::get('default_language')])->one();
    }
    public function parent($db=null)

    {
        return self::andWhere(['Is','parent',NULL])->all();
    }
}
