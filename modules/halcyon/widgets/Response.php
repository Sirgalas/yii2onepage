<?php

namespace app\modules\halcyon\widgets;

use yii\base\Widget;
use app\models\Config;

class Response extends Widget
{
    public function run()
    {
        $sectionResponses=Config::find()->where(['description'=>'section'])->andWhere(['params'=>'секция с условиями'])->orderBy(['count'=>SORT_ASC])->all();
        return $this->render('response',compact('sectionResponses'));
    }

}