<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\search\SectionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Секции';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать секцию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'params',
            [
                'attribute' => 'text',
                'format' => 'raw'
            ],
            'description',
            [
                'attribute'=>'icon',
                'format'=>'raw',
                'value'=>function($model){
                    return Html::tag('span','',['class'=>'fa '.$model->icon]);
                }
            ],
            'count',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
