<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PembayaranClient */

$this->title = 'Make Payment';
$this->params['breadcrumbs'][] = ['label' => 'Client Payment', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-client-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
