<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Spg */

$this->title = 'Add SPG';
$this->params['breadcrumbs'][] = ['label' => 'SPG', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spg-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
