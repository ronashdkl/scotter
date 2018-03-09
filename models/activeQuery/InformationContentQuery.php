<?php

namespace app\models\activeQuery;

/**
 * This is the ActiveQuery class for [[\app\models\InformationContent]].
 *
 * @see \app\models\InformationContent
 */
use app\helpers\Configuration;
class InformationContentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\InformationContent[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\InformationContent|array|null
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
