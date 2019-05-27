<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">


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
        <?= Html::a('Create Event', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'event_id',
            'contract_id',
            'event_name',
            'grade_spg',
            'img_event',
            //'description:ntext',
            //'price',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
