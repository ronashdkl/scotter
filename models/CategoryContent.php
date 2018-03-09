<?php

namespace app\models;

use app\helpers\Encription;
use Yii;

/**
 * This is the model class for table "category_content".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property int $lang
 *
 * @property Category $category
 * @property Language $language
 */
class CategoryContent extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    const SCENARIO_UPDATE = 'update';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_content';
    }




    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['name', 'required'],
            ['lang', 'required'],
           // ['lang', 'unique','message'=>Yii::t('app','Selected language is already in use')],
            ['lang', 'validateLang', 'when' => function () {
                if (isset($this->name)) {
                    return true;
                }
            }],
            [['category_id', 'lang'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['lang'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['lang' => 'id']],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_CREATE] = ['lang','name'];
        $scenarios[self::SCENARIO_UPDATE] = ['name'];
        return $scenarios;
    }
    public function validateLang($model, $attribute)
    {
        $content = self::find()->where(['name'=>$this->name,'lang'=>$this->lang])->exists();
        if($content){
            return $this->addError('lang',Yii::t('app','The selected language for name {name} is already in use',['name'=>$this->name]));
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'name' => Yii::t('app', 'Name'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
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
     * @return \app\models\activeQuery\CategoryContentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\activeQuery\CategoryContentQuery(get_called_class());
    }
}
