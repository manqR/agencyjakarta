<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TagihanClient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagihan-client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'invoice_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contract_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_id')->textInput() ?>

    <?= $form->field($model, 'nominal')->textInput() ?>

    <?= $form->field($model, 'invoice_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'invoice_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'invoice_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'due_date')->textInput() ?>

    <?= $form->field($model, 'invoice_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'create_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
