<?php

namespace app\modules\halcyon\widgets;

use yii\base\Widget;
use app\modules\admin\models\Section;

class Portfolio extends Widget
{
    public function run()
    {
        $sectionPortfolio=Section::find()->where(['description'=>'section'])->andWhere(['params'=>'верхняя карусель'])->orderBy(['count'=>SORT_ASC])->all();
        return $this->render('portfolio',compact('sectionPortfolio'));
    }

}