<?php

namespace app\models;

use app\helpers\Configuration;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use app\helpers\Encription;
/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $parent
 * @property int $feature
 * @property int $show_in_menu
 * @property int $menu_type
 * @property int $position
 * @property string $title
 *
 * @property Category $parentCategory
 * @property Category[] $categories
 * @property CategoryContent[] $categoryContents
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    const CATEGORY_AVATAR_ID = "category_avatar_";
    const AVATAR = "avatar";

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent','show_in_menu','menu_type','position','feature'], 'integer'],
            [['title'], 'string'],
            [['title'], 'required'],
            ['title', 'unique', 'targetClass' => Category::className()],
            [['parent'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['parent' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent' => Yii::t('app', 'Parent Category'),
            'title' => Yii::t('app', 'Machine Name'),
            'show_in_menu' => Yii::t('app', 'Display in menu'),
            'menu_type' => Yii::t('app', 'Menu Type'),
            'feature' => Yii::t('app', 'Feature'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['parent' => 'id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryContents()
    {
        return $this->hasMany(CategoryContent::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }


    private function getCategoryContent()
    {
        return self::getCategoryContents()->lang();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        $content = self::getCategoryContent();

        if (isset($content)) {
            $name = $content->name;
            return $name;
        } else {
            return ucfirst($this->title);
        }
    }

    /**
     * @return string
     */
    public function getMachineName()
    {
        return ucfirst($this->title);
    }


    /**
     * @return bool
     */
    public function getIsParent()
    {
        $isProduct = $this->getProducts()->exists();
        if ($isProduct) {
            return true;
        } else {
            return false;
        }

    }

    /**
     *  Category Select List
     * @param bool $arrayHelper
     * @return array
     */
    public static function getSelectList($arrayHelper = true)
    {
        $categories = self::find()->all();
        $insert = [];

        foreach ($categories as $cat) {


            if ($cat->parent == null && $cat->getCategories()->count() == 0) {
                $insert[] = ['id' => $cat->id, 'title' => $cat->title, 'parent' => 'Other'];

            }
            if ($cat->parent != null) {
                $insert[] = ['id' => $cat->id, 'title' => $cat->title, 'parent' => $cat->parentCategory->getName()];

            }


        }


        if ($arrayHelper) {
            return $data = ArrayHelper::map($insert, 'id', 'title', 'parent');

        } else {
            return $insert;

        }

    }

    public function getAvatarIdentity()
    {
        return $this::CATEGORY_AVATAR_ID.$this->id;
    }

    function getAvatarFromMedia()
    {
        return Media::find()->where(['identity' => $this::CATEGORY_AVATAR_ID . $this->id]);

    }

    public function hasAvatar()
    {
        return $this->getAvatarFromMedia()->exists();
    }

    /**
     * @param bool $backend
     * @param bool $remove
     * @return array|null
     */
    public function getAvatar($backend = false,$remove=false)
    {
        $db = $this->getAvatarFromMedia();
        if ($db->exists()) {

            $db_avatar = $db->one();

            $image = json_decode($db_avatar->image);
            if($remove==true){
                Media::UNLINK_IMAGE($image[0]->file_path);
                $db_avatar->delete();
                return null;
            }
            if ($backend == true) {
                $link = [];
                $link['url'][] = $image[0]->url;
                $link['config'][] = ['size' => $image[0]->size, 'url' => Url::toRoute("/admin/media/remove-image?file=" . $image[0]->file_path . "&id=" . Encription::encryptIt($db_avatar->id) . "&type=" . Media::AVATAR)];
                $link['filePath'][] = $image[0]->file_path;

                return $link;
            } else {
                return $image[0]->url;
            }


        } else {
            return null;
        }

    }

    public static function getFeature()
    {

        return self::find()->where(['feature'=>Configuration::YES])->one();
    }

    public function beforeDelete()
    {
        $this->getAvatar(false,true);
        return parent::beforeDelete();
    }

    /**
     * @inheritdoc
     * @return \app\models\activeQuery\CategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\activeQuery\CategoryQuery(get_called_class());
    }
}
