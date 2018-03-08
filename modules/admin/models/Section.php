<?php

namespace app\modules\admin\models;

use app\models\Config;

class Section extends Config
{

    public function getImagePath(){
        return  $this->uploadPath() . '/'.$this->image;
    }

    public function beforeSave($insert)
    {
        if($this->fileUpload!='')
            $this->image=$this->upload();
        return parent::beforeSave($insert);
    }

}