<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_content".
 *
 * @property string $id
 * @property string $product_id
 * @property string $title
 * @property string $summary
 * @property string $description
 * @property string $type
 * @property int $lang
 *
 * @property Product $product
 * @property Language $language
 */
class ProductContent extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    const SCENARIO_UPDATE = 'update';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'title', 'summary', 'description', 'type', 'lang'], 'required'],
            ['lang', 'validateLang', 'when' => function () {
                if (isset($this->title)) {
                    return true;
                }
            }],
            [['product_id', 'lang'], 'integer'],
            [['summary', 'description'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 50],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['lang'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['lang' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'title' => Yii::t('app', 'Title'),
            'summary' => Yii::t('app', 'Summary'),
            'description' => Yii::t('app', 'Description'),
            'type' => Yii::t('app', 'Type'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_CREATE] = ['title', 'summary', 'description', 'type', 'lang'];
        $scenarios[self::SCENARIO_UPDATE] = ['title', 'summary', 'description', 'type'];
        return $scenarios;
    }
    public function validateLang($model, $attribute)
    {
        $content = self::find()->where(['title'=>$this->title,'lang'=>$this->lang])->exists();
        if($content){
            return $this->addError('lang',Yii::t('app','The selected language for title {name} is already in use',['name'=>$this->title]));
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'lang']);
    }

    /**
     * @inheritdoc
     * @return \app\models\activeQuery\ProductContentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\activeQuery\ProductContentQuery(get_called_class());
    }
}
