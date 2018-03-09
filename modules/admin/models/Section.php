<?php

namespace app\modules\admin\models;

use app\models\Config;
use yii\helpers\FileHelper;
class Section extends Config
{

    public function getImagePath(){
        return  $this->uploadPath() . '/'.$this->image;
    }

    public function upload()
    {
        if ($this->validate()) {
            FileHelper::createDirectory($this->uploadPath());
            if(!$this->fileUpload->saveAs( $this->uploadPath(). $this->fileUpload->baseName . '.' . $this->fileUpload->extension))
            throw new \Exception($this->errors);
            $result=$this->fileUpload->baseName . '.' . $this->fileUpload->extension;
            $this->fileUpload=null;
            return $result;
        } else {
            return false;
        }
    }

    public function beforeSave($insert)
    {
        if($this->fileUpload!='')
            $this->image=$this->upload();
        return parent::beforeSave($insert);
    }

}