<?php

namespace app\models\activeQuery;


/**
 * This is the ActiveQuery class for [[\app\models\CategoryContent]].
 *
 * @see \app\models\CategoryContent
 */

use app\helpers\Configuration;
class CategoryContentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\CategoryContent[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\CategoryContent|array|null
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
        return parent::andWhere(['lang'=>Configuration::get('default_language')])->one();
    }
}
