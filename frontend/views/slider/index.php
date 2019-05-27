<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div>
            <div class="alert alert-success">Insert Successfull ! </div>
        </div>
    <?php endif; ?>
    <?php if (Yii::$app->session->hasFlash('update')): ?>
        <div>
            <div class="alert alert-success">Update Successfull ! </div>
        </div>
    <?php endif; ?>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Slider', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'slider_name',
            'slider_image',
            [
                'label'=>'Status',
                'format' => 'raw',
                'value'=> function ($model) {
                    return $model->flag == 1 ? '<span class="label label-success">Enable</span>': '<span class="label label-danger">Disable</span>';

                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
