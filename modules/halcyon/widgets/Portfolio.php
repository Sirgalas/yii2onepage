<?php

namespace app\modules\halcyon\widgets;

use yii\base\Widget;
use app\models\Config;

class Portfolio extends Widget
{
    public function run()
    {
        $sectionPortfolio=Config::find()->where(['description'=>'section'])->andWhere(['params'=>'верхняя карусель'])->orderBy(['count'=>SORT_ASC])->all();
        return $this->render('portfolio',compact('sectionPortfolio'));
    }

}