<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PembayaranClient */

$this->title = 'Update Pembayaran Client: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->urutan, 'url' => ['view', 'id' => $model->urutan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembayaran-client-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
