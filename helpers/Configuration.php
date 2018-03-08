<?php

namespace app\helpers;

use Yii;

/**
 * This is the model class for table "configuration".
 *
 * @property int $id
 * @property string $name
 * @property string $value
 * @property int $can_update_value
 */
class Configuration extends \yii\db\ActiveRecord
{
    const ACTIVE = 1;
    const INACTIVE = 2;
    const YES = 3;
    const NO = 4;
    const MENU_WITH_IMAGE = 5;
    const MENU_TEXT_ONLY = 6;

    const DEFAULT_LANGUAGE = "default_language";


    const load_configuration_from_session = true;

    const MENU_ARRAY = [
        self::MENU_TEXT_ONLY => "With Product Text Only",
        self::MENU_WITH_IMAGE => "With Product Text And Image"
    ];

    const FEATURE_ARRAY = [
        self::YES => "Yes",
        self::NO => "No"
    ];
    const STATUS_ARRAY = [
        self::ACTIVE => "Active",
        self::INACTIVE => "In-Active"
    ];

    public static function getStatus($value)
    {
        switch ($value){
            case self::ACTIVE:
                return self::STATUS_ARRAY[self::ACTIVE];
            case self::INACTIVE:
                return self::STATUS_ARRAY[self::INACTIVE];
            case self::YES:
                return "Yes";
            case self::NO:
                return "No";
            case self::MENU_WITH_IMAGE:
                return self::MENU_ARRAY[self::MENU_WITH_IMAGE];
            case self::MENU_TEXT_ONLY:
                return self::MENU_ARRAY[self::MENU_TEXT_ONLY];

        }
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'configuration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'value'], 'required'],
            [['value'], 'string'],
            [['can_update_value'], 'safe'],
            [['name'], 'string', 'max' => 50],
            ['name', 'unique', 'targetAttribute' => ['name'], 'message' => 'Name must be unique.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'value' => 'Value',
            'can_update_value' => 'Can Update Value',
        ];
    }


    public static function getDefaultLanguage()
    {
        return self::get('default_language');
    }

    /**
     * @param $name
     * @param bool $boolenOnly
     * @return bool|mixed|null
     */
    public static function get($name, $boolenOnly = false)
    {
        if ($name != null) {

            if (self::load_configuration_from_session) {
                if (Yii::$app->session->has($name)) {
                    return Yii::$app->session->get($name);
                } else {
                    $config = self::find()->where(['name' => $name])->one();

                    if (!is_null($config)) {
                        Yii::$app->session->set($name, $config->value);

                        //check if it is  boolen value

                        if ($boolenOnly) {
                            $checkTrue = ['1', 'true', 'TRUE', 'True', 'one', 'One', 'ONE'];
                            $checkFalse = ['0', 'false', 'FALSE', 'False', 'zero', 'ZERO', 'Zero'];
                            if (in_array($config->value, $checkTrue, true)) {
                                return true;
                            } elseif (in_array($config->value, $checkFalse, true)) {
                                return false;
                            } else {
                                return false;
                            }
                        }

                        return $config->value;

                    } else {
                        return null;
                    }
                }

            } else {

                $config = self::find()->where(['name' => $name])->one();

                if (!is_null($config)) {


                    //check if it is  boolen value

                    if ($boolenOnly) {
                        $checkTrue = ['1', 'true', 'TRUE', 'True', 'one', 'One', 'ONE'];
                        $checkFalse = ['0', 'false', 'FALSE', 'False', 'zero', 'ZERO', 'Zero'];
                        if (in_array($config->value, $checkTrue, true)) {
                            return true;
                        } elseif (in_array($config->value, $checkFalse, true)) {
                            return false;
                        } else {
                            return false;
                        }
                    }

                    return $config->value;

                } else {
                    return null;
                }
            }
        } else {
            return false;
        }
    }


    /**
     * @param $name
     * @param $value
     * @return bool
     */
    public static function updateValue($name, $value)
    {
        $config = self::find()->where(['name' => $name])->one();
        if (!is_null($config)) {
            if ($config->can_update_value==1) {
                $config->value = $value;
                return $config->save(false);
            } else {
                return false;
            }


        } else {
            return false;
        }

    }


}
