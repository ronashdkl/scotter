<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "information_content".
 *
 * @property int $id
 * @property int $information_id
 * @property string $name
 * @property string $heading
 * @property int $description
 * @property int $lang
 *
 * @property Information $information
 * @property Language $language
 */
class InformationContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'information_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['information_id', 'name', 'lang'], 'required'],
            ['heading','safe'],
            ['description','string'],
            [['information_id', 'lang'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['heading'], 'string', 'max' => 200],
            [['information_id'], 'exist', 'skipOnError' => true, 'targetClass' => Information::className(), 'targetAttribute' => ['information_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'information_id' => Yii::t('app', 'Information ID'),
            'name' => Yii::t('app', 'Name'),
            'heading' => Yii::t('app', 'Heading'),
            'description' => Yii::t('app', 'Description'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInformation()
    {
        return $this->hasOne(Information::className(), ['id' => 'information_id']);
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
     * @return \app\models\activeQuery\InformationContentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\activeQuery\InformationContentQuery(get_called_class());
    }
}
