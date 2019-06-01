<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Spg */

$this->title = 'Update Spg: '.$model->first_name;
$this->params['breadcrumbs'][] = ['label' => 'SPG', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spg-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
