<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property int $id
 * @property string $params
 * @property string $text
 * @property string $description
 */
class Config extends \yii\db\ActiveRecord
{
    const PATH='images';
    const URL='images';

    public $fileUpload;

    public static $menuItem=[
        0=>'intro',
        1=>'features',
        2=>'responsive',
        3=>'portfolio',
        4=>'team',
        5=>'contact'
    ];

    public function getAllitem(){
        return self::$menuItem;
    }

    public function getItem(){
        return self::$menuItem[$this->params];
    }

    public function uploadPath(){
        return Yii::getAlias('@app').'/'.self::PATH . '/';
    }

    public function getImagePath(){
        return  $this->uploadPath() . '/'.$this->text;
    }

    public function getImageUrl(){
        return Yii::$app->homeUrl . '/'.$this->text;
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->fileUpload->saveAs( $this->uploadPath(). $this->fileUpload->baseName . '.' . $this->fileUpload->extension);
            $result=$this->fileUpload->baseName . '.' . $this->fileUpload->extension;
            $this->fileUpload=null;
            return $result;
        } else {
            return false;
        }
    }

    public function beforeSave($insert)
    {
        if(isset($fileUpload))
            $this->text=$this->upload();
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['params', 'text', 'description'], 'string', 'max' => 255],
            [['fileUploade'],'file','skipOnEmpty' => true,'extensions' => 'jpg, png'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'params' => 'Params',
            'text' => 'Text',
            'description' => 'Description',
        ];
    }
}
