<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TagihanClientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagihan-client-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'invoice_id') ?>

    <?= $form->field($model, 'contract_id') ?>

    <?= $form->field($model, 'client_id') ?>

    <?= $form->field($model, 'nominal') ?>

    <?= $form->field($model, 'invoice_address') ?>

    <?php // echo $form->field($model, 'invoice_name') ?>

    <?php // echo $form->field($model, 'invoice_email') ?>

    <?php // echo $form->field($model, 'due_date') ?>

    <?php // echo $form->field($model, 'invoice_phone') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'create_by') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'urutan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
