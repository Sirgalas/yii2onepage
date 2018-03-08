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
