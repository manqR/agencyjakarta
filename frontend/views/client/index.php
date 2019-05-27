<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-index">

    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div>
            <div class="alert alert-success">Insert Successfull ! </div>
        </div>
    <?php endif; ?>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Client', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'username',
            'company_name',
            'address:ntext',
            'phone_number',
            'email:email',
            'city',
            //'created_date',
            [
                'label'=>'Status',
                'format' => 'raw',
                'value'=> function ($model) {
                    return $model->flag == 1 ? '<span class="label label-success">Active</span>': '<span class="label label-danger">Disable</span>';

                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
