<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TagihanClient */

$this->title = 'Update Tagihan Client: ' . $model->urutan;
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->urutan, 'url' => ['view', 'id' => $model->urutan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tagihan-client-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
