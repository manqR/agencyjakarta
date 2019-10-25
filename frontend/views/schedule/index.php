<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ScheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schedules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Schedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => 'Action',
                'format' => 'raw',
                'value'=> function ($model) {
                    return Html::a('<i class="glyphicon glyphicon-search">',['view','id'=>$model->urutan]);

                },
            ],
            'contract_id',
            [
                'label'=>'Client Name',
                'attribute'=>'clientName',
                'value'=>'client.name',
            ], 
            'pic_name',
            'pic_phone',
            'pic_email:email',
            //'start_date',
            //'end_date',
            //'number_of_spg',
            //'description:ntext',
            //'contract_status',
            //'payment_status',
            //'upload_file',
            //'created_date',
            //'created_by',
            //'update_date',
            //'update_by',
            //'urutan',
        ],
    ]); ?>
</div>
