<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TagihanClient */

$this->title = 'Create Tagihan Client';
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-client-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
