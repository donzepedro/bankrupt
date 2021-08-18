<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
           [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png,jpg,webp','maxSize'=>1000000],
        ];
    }
//    '../web/img/managers_profile_img/'
    public function upload($path,$filename = 'profileimg')
    {
        $this->imageFile->name = $filename . '.' .$this->imageFile->extension;
        if ($this->validate()) {
            $this->imageFile->saveAs($path . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
