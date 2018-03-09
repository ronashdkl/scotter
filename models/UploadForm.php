<?php
/**
 * Created by PhpStorm.
 * User: rnsdk
 * Date: 11/8/2017
 * Time: 7:07 PM
 */

namespace app\models;


use Yii;
use yii\base\Model;

class UploadForm extends Model
{

    public $files = [];


    /**
     * @return array
     */
    public function rules()
    {
        return [

            [['files'], 'required'],

            [['files'], 'file', 'skipOnEmpty' => false, 'extensions' => ['jpg', 'png'], 'checkExtensionByMimeType' => false, 'maxSize' => 3024 * 3024 * 2, 'maxFiles' => 10]

        ];
    }


}