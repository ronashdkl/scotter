<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "language".
 *
 * @property int $id
 * @property string $name
 * @property string $iso
 * @property int $flag
 *
 * @property CategoryContent[] $categoryContents
 * @property ProductAttribute[] $productAttributes
 * @property ProductContent[] $productContents
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'language';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'iso'], 'required'],
            [['flag'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['iso'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Language'),
            'iso' => Yii::t('app', 'Iso'),
            'flag' => Yii::t('app', 'Flag'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryContents()
    {
        return $this->hasMany(CategoryContent::className(), ['lang' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductAttributes()
    {
        return $this->hasMany(ProductAttribute::className(), ['lang' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductContents()
    {
        return $this->hasMany(ProductContent::className(), ['lang' => 'id']);
    }


    public static function getLanguageList()
    {

        $lang = self::find()->asArray()->all();
        return ArrayHelper::map($lang,'id','name');

    }
    /**
     * @inheritdoc
     * @return \app\models\activeQuery\LanguageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\activeQuery\LanguageQuery(get_called_class());
    }
}
