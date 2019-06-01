<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Contract */

$this->title = 'Update Contract: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Contracts', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update - '. $model->contract_id;
?>
<div class="contract-update">

    <?= $this->render('_form', [
        'model' => $model,
        'client' => $client,
    ]) ?>

</div>
