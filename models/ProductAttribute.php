<?php

namespace app\models;

use app\helpers\Configuration;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "product_attributes".
 *
 * @property string $id
 * @property string $attributes_id
 * @property string $product_id
 * @property string $value
 * @property int $type
 * @property int $status
 * @property int $lang
 *
 * @property Language $language
 * @property Attribute $productAttribute
 * @property Product $product
 */
class ProductAttribute extends \yii\db\ActiveRecord
{
    public $addAttribute;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_attribute';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['status', 'required'],
            ['attributes_id', 'required', 'when' => function () {
                if ($this->addAttribute == null) {
                    return true;
                } else {
                    return false;
                }
            }],
            ['value', 'required', 'when' => function () {
                if ($this->addAttribute != null) {
                    return true;
                } else {
                    return false;
                }
            }],
            ['addAttribute', 'required', 'when' => function () {
                if ($this->attributes_id == null) {
                    return true;
                } else {
                    return false;
                }
            }],
            ['product_id', 'safe'],
            ['addAttribute', 'safe'],

            [['attributes_id', 'product_id', 'type', 'status', 'lang'], 'integer'],
            [['value'], 'string'],
            [['lang'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['lang' => 'id']],
            [['attributes_id'], 'exist', 'skipOnError' => true, 'targetClass' => Attribute::className(), 'targetAttribute' => ['attributes_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'attributes_id' => Yii::t('app', 'Attributes'),
            'product_id' => Yii::t('app', 'Product'),
            'value' => Yii::t('app', 'Value'),
            'type' => Yii::t('app', 'Type'),
            'status' => Yii::t('app', 'Status'),
            'lang' => Yii::t('app', 'Lang'),
            'addAttribute' => Yii::t('app', 'New Attribute'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::class, ['id' => 'lang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductAttribute()
    {
        return $this->hasOne(Attribute::class, ['id' => 'attributes_id']);
    }

    /**
     * @return string
     */
    public function getValue()
    {
        $attribute = $this->productAttribute;
        if ($this->value == null) {
            return $attribute->value;
        } else {
            return $this->value;
        }

    }

    /**
     * @return mixed
     */
    public function getType()
    {
        $attribute = $this->productAttribute;
        if ($this->type == null) {
            return ArrayHelper::getValue(Attribute::TYPE_ARRAY, $attribute->type);

        } else {
            return ArrayHelper::getValue(Attribute::TYPE_ARRAY, $this->type);
        }

    }

    /**
     * @return mixed
     */
    public function getStatus()
    {

        return ArrayHelper::getValue(Configuration::STATUS_ARRAY, $this->status);


    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }


    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                if ($this->addAttribute != null && $this->attributes_id == null) {
                    $attribute = new Attribute();
                    $attribute->name = $this->addAttribute;
                    $attribute->value = $this->value;
                    $attribute->type = ($this->type != null) ? $this->type : $attribute::TYPE_SHORT;
                    $attribute->lang = ($this->lang != null) ? $this->lang : Configuration::DEFAULT_LANGUAGE;

                    $check = Attribute::find()->where(['name'=>$this->addAttribute])->exists();
                    if($check==false){
                        $attribute->save();
                        $preAtr = $attribute::findOne(['name'=>$this->addAttribute]);
                        $this->attributes_id = $preAtr->id;
                        $this->addAttribute = null;
                        return true;
                    }else{
                        $this->addError('addAttribute','Attribute already exists!');
                        return false;
                    }



                }
                elseif ($this->attributes_id!=null && $this->addAttribute!=null){


                    $this->addError('attributes_id','New Attribute detected! please unselect this attributes.');
                    return false;
                }
                elseif ($this->attributes_id!=null && $this->addAttribute==null){
                    $check = $this::find()->where(['id'=>$this->attributes_id,'product_id'=>$this->product_id])->exists();
                    if($check==false){
                        return true;
                    }else{
                        $this->addError('attributes_id','The selected attribute is already assigned to this product');
                        return false;
                    }
                }

            }
            return true;
        }
        return false;

    }


    /**
     * @inheritdoc
     * @return \app\models\activeQuery\ProductAttributeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\activeQuery\ProductAttributeQuery(get_called_class());
    }
}
