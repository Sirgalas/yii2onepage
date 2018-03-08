<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\search\HeaderImageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Картинка шапки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Добавить картинку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'params',
            [
                'attribute' => 'text',
                'format' => 'raw',
                'value'=>function($model){
                    return Html::img($model->imagePath,['width'=>200]);
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
