<?php

namespace app\models\activeQuery;

/**
 * This is the ActiveQuery class for [[\app\models\Media]].
 *
 * @see \app\models\Media
 */
class MediaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\Media[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Media|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
