<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08.03.18
 * Time: 14:33
 */

namespace app\components;

use yii\base\Component;
use app\models\Config;

class ConfigСomponent extends Component
{
    protected $data = array();

    public function init()
    {
        $items = Config::find()->all();
        foreach ($items as $item){
            $param=$item->text;
            $this->data[$item->param] = $param;
        }
        parent::init();
    }

    public function get($key)
    {
        if (array_key_exists($key, $this->data)){
            return $this->data[$key];
        } else {
            return false;
        }
    }

}