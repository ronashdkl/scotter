<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "information".
 *
 * @property int $id
 * @property string $machine_name
 * @property int $status
 * @property int $position
 * @property string $slug
 *  * @property int $show_in_menu
 * @property int $menu_type
 *
 * @property InformationContent[] $informationContents
 */
class Information extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'information';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['machine_name', 'status', 'position', 'slug'], 'required'],
            [['status', 'position','show_in_menu','menu_type'], 'integer'],
            [['machine_name'], 'string', 'max' => 20],
            [['slug'], 'string', 'max' => 20],
            [['machine_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'machine_name' => Yii::t('app', 'Machine Name'),
            'status' => Yii::t('app', 'Status'),
            'position' => Yii::t('app', 'Position'),
            'slug' => Yii::t('app', 'Slug'),
            'show_in_menu' => Yii::t('app', 'Display in menu'),
            'menu_type' => Yii::t('app', 'Menu Type'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInformationContents()
    {
        return $this->hasMany(InformationContent::className(), ['information_id' => 'id']);
    }

    /**
     * @return mixed
     */
    private function getInformationContent()
    {
        return self::getInformationContents()->lang();
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        $content = self::getInformationContent();

        if (isset($content)) {
            $name = $content->name;
            return $name;
        } else {
            return ucfirst($this->machine_name);
        }
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        $content = self::getInformationContent();

        if (isset($content)) {
            $name = $content->description;
            return $name;
        } else {
            return null;
        }
    }
    /**
     * @return mixed
     */
    public function getHeading()
    {
        $content = self::getInformationContent();

        if (isset($content)) {
            $name = $content->heading;
            return $name;
        } else {
            return null;
        }
    }

    /**
     * @inheritdoc
     * @return \app\models\activeQuery\InformationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\activeQuery\InformationQuery(get_called_class());
    }
}
