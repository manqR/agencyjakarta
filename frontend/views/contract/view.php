<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Contract */

$this->title = $model->contract_id;
$this->params['breadcrumbs'][] = ['label' => 'Contracts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'contract_id' => $model->contract_id, 'urutan' => $model->urutan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'contract_id' => $model->contract_id, 'urutan' => $model->urutan], [
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
            'contract_id',
            'idclient',
            'pic_name',
            'pic_phone',
            'pic_email:email',
            'start_date',
            'end_date',
            'number_of_spg',
            'description:ntext',
            'contract_status',
            'payment_status',
            'upload_file',
            'created_date',
            'created_by',
            'update_date',
            'update_by',
            'urutan',
        ],
    ]) ?>

</div>
