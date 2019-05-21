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

            'payment_number',
            'invoice_id',
            'payment_menthod',
            'bank_name',
            'account_name',
            'payment_date',
            'prove_file',
            'nominal',
            //'create_date',
            //'create_by',
            //'urutan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
