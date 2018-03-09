<?php

namespace app\modules\halcyon\widgets;

use yii\base\Widget;
use app\modules\admin\models\Section;

class Reviews extends Widget
{
    public function run()
    {
        $sectionReviews=Section::find()->where(['description'=>'section'])->andWhere(['params'=>'карусель отзывы'])->orderBy(['count'=>SORT_ASC])->all();
        return $this->render('reviews',compact('sectionReviews'));
    }

}