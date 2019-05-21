<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PembayaranClient */

$this->title = $model->urutan;
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-client-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->urutan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->urutan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'payment_number',
            'invoice_id',
            'payment_menthod',
            'bank_name',
            'account_name',
            'payment_date',
            'prove_file',
            'nominal',
            'create_date',
            'create_by',
            'urutan',
        ],
    ]) ?>

</div>
