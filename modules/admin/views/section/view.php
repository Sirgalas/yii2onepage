<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Config */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('К списку', ['index', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'params',
            [
                'attribute' => 'text',
                'format' => 'raw'
            ],
            'description',
            [
                'attribute'=>'icon',
                'format'=>'raw',
                'value'=>function()use($model){
                    return Html::tag('span','',['class'=>'fa '.$model->icon]);
                }
            ],
            'count',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'value'=>function()use($model){
                    return Html::img('/'.$model->imagePath,['width'=>200]);
                }
            ],
        ],
    ]) ?>

</div>
