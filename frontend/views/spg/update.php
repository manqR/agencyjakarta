<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Spg */

$this->title = 'Update Spg: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Spgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
