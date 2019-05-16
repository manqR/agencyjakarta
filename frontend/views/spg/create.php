<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Spg */

$this->title = 'Create Spg';
$this->params['breadcrumbs'][] = ['label' => 'Spgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
