<?php

namespace app\models;

use app\helpers\Configuration;
use app\helpers\Encription;
use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "product".
 *
 * @property string $id
 * @property int $category_id
 * @property int $feature
 * @property int $status
 * @property double $actual_price
 * @property double $sale_price
 * @property int $stock
 * @property string $created_at
 * @property string $updated_at
 * @property string $sku
 *
 * @property Category $category
 * @property ProductAttribute[] $productAttributes
 * @property ProductContent[] $productContents
 */
class Product extends \yii\db\ActiveRecord
{
    const PRODUCT_AVATAR_ID = "product_avatar_";
    const PRODUCT_ADDITIONAL_IMAGE = "product_additional_image_";
    const AVATAR = "avatar";
    const ADDITIONAL_IMAGE = "additional_image";
    public $avatar;
    public $additional_image;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'feature', 'status', 'actual_price', 'sale_price', 'sku','stock'], 'required'],
            ['sku', 'unique', 'targetClass' => self::class],
            [['category_id', 'status', 'stock'], 'integer'],
            [['actual_price', 'sale_price'], 'number'],

            [['created_at', 'updated_at', 'avatar', 'additional_image'], 'safe'],
            [['feature'], 'string', 'max' => 1],
            [['sku'], 'string', 'max' => 100],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Category'),
            'feature' => Yii::t('app', 'Feature'),
            'status' => Yii::t('app', 'Status'),
            'actual_price' => Yii::t('app', 'Actual Price'),
            'sale_price' => Yii::t('app', 'Sale Price'),
            'stock' => Yii::t('app', 'Stock'),
            'avatar' => Yii::t('app', 'Avatar'),
            'additional_image' => Yii::t('app', 'Additional Images'),

            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'sku' => Yii::t('app', 'SKU'),
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
    public function getProductAttributes()
    {
        return $this->hasMany(ProductAttribute::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductContents()
    {
        return $this->hasMany(ProductContent::className(), ['product_id' => 'id']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {

                $this->created_at = date("Y-m-d h:i:sa");
                $this->updated_at = date("Y-m-d h:i:sa");

                Yii::$app->session->setFlash("success", "New Product created at " . $this->created_at);

            } else {
                $this->updated_at = date("Y-m-d h:i:sa");
                Yii::$app->session->setFlash("success", "Product updated at " . $this->updated_at);

            }
            return true;
        }
        return false;

    }


    private function getProductContent()
    {
        return self::getProductContents()->lang();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        $content = self::getProductContent();

        if (isset($content)) {
            $name = $content->title;
            return $name;
        } else {
            return ucfirst($this->sku);
        }
    }

    /**
     * @return null
     */
    public function getSummary()
    {
        $content = self::getProductContent();

        if (isset($content)) {
            $name = $content->summary;
            return $name;
        } else {
            return NULL;
        }
    }

    /**
     * @return null
     */
    public function getDescription()
    {
        $content = self::getProductContent();

        if (isset($content)) {
            $name = $content->description;
            return $name;
        } else {
            return NULL;
        }
    }

    /**
     * @return null
     */
    public function getType()
    {
        $content = self::getProductContent();

        if (isset($content)) {
            $name = $content->type;
            return $name;
        } else {
            return NULL;
        }
    }

    /**
     * @return null
     */
    public function getLang()
    {
        $content = self::getProductContent();

        if (isset($content)) {
            $name = $content->lang;
            return $name;
        } else {
            return NULL;
        }
    }

    public function getPrice()
    {
        if($this->actual_price!=null){
            return "<del>".Configuration::get('currency')." ".$this->actual_price."</del> ". Configuration::get('currency')." ". $this->sale_price ;
        }else{
            return Configuration::get('currency'). $this->$this->sale_price ;

        }
    }

    /**
     * @return string
     */
    public function getSalePrice()
    {
        return Configuration::get('currency')." ".$this->sale_price;
    }

    /**
     * @return string
     */
    public function getActualPrice()
    {
        return Configuration::get('currency')." ".$this->actual_price;
    }

    function getAvatarFromMedia()
    {
        return Media::find()->where(['identity' => $this::PRODUCT_AVATAR_ID . $this->id]);

    }

    function getImagesFromMedia()
    {
        return Media::find()->where(['identity' => $this::PRODUCT_ADDITIONAL_IMAGE . $this->id]);

    }

    public function hasAvatar()
    {
        return $this->getAvatarFromMedia()->exists();
    }

    public function hasImages()
    {
        return $this->getImagesFromMedia()->exists();
    }


    /**
     * @param bool $backend
     * @param bool $remove
     * @return array|null
     */
    public function getAvatar($backend = false, $remove = false)
    {
        $db = $this->getAvatarFromMedia();
        if ($db->exists()) {

            $db_avatar = $db->one();

            $image = json_decode($db_avatar->image);
            if ($remove == true) {
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


    /**
     * @param bool $backend
     * @param bool $remove
     * @return array|mixed|null
     */
    public function getImages($backend = false, $remove = false)
    {
        $db = $this->getImagesFromMedia();
        if ($db->exists()) {

            $db_image = $db->one();

            $images = json_decode($db_image->image);
            $link = [];
            foreach ($images as $image) {
                if ($remove == true) {
                    Media::UNLINK_IMAGE($image->file_path);
                    /*   $db_image->delete();
                       return null;*/
                }
                $link['url'][] = $image->url;
                $link['config'][] = ['size' => $image->size, 'url' => Url::toRoute("/admin/media/remove-image?file=" . $image->file_path . "&id=" . Encription::encryptIt($db_image->id) . "&type=" . Media::ADDITIONAL_IMAGE)];
                $link['filePath'][] = $image->file_path;
            }

            if($remove==true){
                return $db_image->delete();
            }
            if ($backend = true) {
                return $link;

            } else {
                return $link['url'];
            }


        } else {
            return null;
        }
    }

    /**
     * @return bool
     */
    public function beforeDelete()
    {
        $this->getAvatar(false,true);
        $this->getImages(false,true);
        return parent::beforeDelete();
    }

    /**
     * @inheritdoc
     * @return \app\models\activeQuery\ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\activeQuery\ProductQuery(get_called_class());
    }
}
