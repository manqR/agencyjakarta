<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TagihanClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Client Invoice';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss("
    .desc {
        color:#c0392b
    }
");
?>
<div class="tagihan-client-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label'=>'Invoice ID',
                'attribute'=>'invoice_id',
                'format' => 'raw',
                'value'=> function ($model) {
                    return Html::a('<center><b>' . $model->invoice_id . '<br / > <span class="desc">' . $model->invoice_name . '</span></b></center>',['view','id'=>$model->urutan]);

                },
            ],
            
            'contract_id',
            
            [
                'label'=>'Nominal ID',
                'attribute'=>'nominal',
                'format' => 'raw',
                'value'=> function ($model) {
                    return FormatRupiah($model->nominal);

                },
            ],
            [
                'label'=>'Phone Number',
                'attribute' => 'invoice_phone',
            ],
            [
                'label'=>'Email',
                'attribute' => 'invoice_email',
            ],
            [
                'label'=>'Address',
                'attribute' => 'invoice_address',
            ],
            'due_date',

            [
                'label'=>'Status',
                'attribute'=>'status',
                'format' => 'raw',
                'value'=> function ($model) {
                    return $model->status == 0 ? '<span class="label label-danger">Unpaid</span>' : '<span class="label label-success">Paid</label>';

                },
            ],
            [
                'format' => 'raw',
                'value'=> function ($model) {
                    return Html::a('<i class="glyphicon glyphicon-print">',['print','id'=>$model->urutan]);

                },
            ],


        ],
    ]); ?>
</div>
