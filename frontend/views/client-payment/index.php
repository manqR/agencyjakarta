<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PembayaranClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Client Payment';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-client-index ">


    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div>
            <div class="alert alert-success">Action Successfull ! </div>
        </div>
    <?php endif; ?>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Make Payment', ['create'], ['class' => 'btn btn-success']) ?>
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
            'payment_number',
            'invoice_id',
            'payment_menthod',
            'bank_name',
            'account_name',
            'payment_date',
            [
                'label' => 'Upload File',
                'attribute' => 'prove_file',
                'format' => 'raw',
                'value'=> function ($model) {
                    return Html::a($model->prove_file,['download','id'=>$model->payment_number,'file'=>$model->prove_file]);

                },
            ],
            [
                'label'=>'Nominal ID',
                'attribute'=>'nominal',
                'format' => 'raw',
                'value'=> function ($model) {
                    return FormatRupiah($model->nominal);

                },
            ],
            [
                'label'=>'Status',
                'attribute'=>'status',
                'format' => 'raw',
                'value'=> function ($model) {
                    if($model->status == 0){
                        return '<span class="label label-danger">Reject</span>';
                    }else if($model->status == 1){
                        return '<span class="label label-success">Approve</span>';
                    }else{
                        return '<span class="label label-warning">Pending</span>';
                    }                    

                },
            ],
            
            //'create_date',
            //'create_by',
            //'urutan',

        ],
    ]); ?>
</div>
