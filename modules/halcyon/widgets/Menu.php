<?php

namespace app\modules\halcyon\widgets;

use app\models\Config;
use yii\base\Widget;

class Menu extends Widget
{
    public function run()
    {
       $config=Config::find()->where(['description'=>'heder_menu'])->all();
        
        return $this->render('menu',compact('config'));
    }

}