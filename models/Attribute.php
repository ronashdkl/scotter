<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "attributes".
 *
 * @property string $id
 * @property string $name
 * @property string $value
 * @property int $type
 * @property int $lang
 *
 * @property ProductAttribute[] $productAttributes
 * @property Language $language
 */
class Attribute extends \yii\db\ActiveRecord
{
    const TYPE_SHORT = 1;
    const TYPE_LONG = 2;

    const TYPE_ARRAY = [
        self::TYPE_LONG => "Long",
        self::TYPE_SHORT => "Short"
    ];



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attribute';
    }

    public function Attribute(){
        $this->lang = 1;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'value', 'type', 'lang'], 'required'],
            [['value'], 'string'],
            [['type', 'lang'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'value' => Yii::t('app', 'Value'),
            'type' => Yii::t('app', 'Type'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductAttributes()
    {
        return $this->hasMany(ProductAttribute::className(), ['attributes_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'lang']);
    }

    public static function getType($type)
    {
        switch ($type){
            case self::TYPE_LONG:
                return self::TYPE_ARRAY[self::TYPE_LONG];
            case self::TYPE_SHORT:
                return self::TYPE_ARRAY[self::TYPE_SHORT];
        }

    }

    public static function getAttributeList()
    {
        return ArrayHelper::map(self::find()->all(),'id','name');
    }
    /**
     * @inheritdoc
     * @return \app\models\activeQuery\AttributeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\activeQuery\AttributeQuery(get_called_class());
    }
}
