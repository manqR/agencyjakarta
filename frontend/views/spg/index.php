<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SpgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SPG';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spg-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(' Add SPG', ['create'], ['class' => 'btn btn-success fa fa-plus']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            [
                'label'=>'Full Name',
                'format' => 'raw',
                'attribute'=>'first_name',
                'value'=>function ($model) {
                    return $model->first_name.' '.$model->last_name;
                },
            ],
            'username',
            'city',
            [
                'label'=>'Ethnic',
                'attribute'=>'face'
            ],
            'verified',
            
            
            //'phone',
            //'email:email',
            //'address',
            //'description',
            //'ktp',
            //'bod',
            //'high',
            //'weight',
            //'language',
            //'face',
            //'verified',
            //'auth_key',
            //'password',
            //'created_at',
            //'updated_at',
            //'active_work',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
