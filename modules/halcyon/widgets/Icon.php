<?php

namespace app\modules\halcyon\widgets;

use app\models\Config;
use yii\base\Widget;

class Icon extends Widget
{

    public function run()
    {
        $sectionIcon=Config::find()->where(['description'=>'section'])->andWhere(['params'=>'секция с иконками'])->orderBy(['count'=>SORT_ASC])->all();
        return $this->render('icon',compact('sectionIcon'));
    }
}