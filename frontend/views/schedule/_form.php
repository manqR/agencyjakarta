<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model frontend\models\Schedule */
/* @var $form yii\widgets\ActiveForm */

$this->registerJs("  

    $(\".datepicker\").datepicker({ 
        format: 'yyyy-mm-dd'
    });

");

$root = '@web';

$this->registerJsFile($root."/vendors/bootstrap-timepicker/js/bootstrap-timepicker.js",
['depends' => [\yii\web\JqueryAsset::className()],
'position' => View::POS_END]);

?>

<div class="contract-form card card-block">

    <?php $form = ActiveForm::begin(); ?>

    <label>Contract ID</label>
    <div class="input-group m-b">
        <input type="text" class="form-control contractID" readonly>
        <span class="input-group-addon"><i class="search-open-icon icon-magnifier" aria-hidden="true" title="Search Contract" data-toggle="modal" data-target=".contract"></i></span>
    </div>    
    <?= $form->field($model, 'contract_id')->hiddenInput(['maxlength' => true,'class'=>'contractID'])->label(false)?>

    <label>Event ID</label>
    <div class="input-group m-b">
        <input type="text" class="form-control eventID" readonly>
        <span class="input-group-addon"><i class="search-open-icon icon-magnifier" aria-hidden="true" title="Search Event" data-toggle="modal" data-target=".event"></i></span>
    </div>    
    <?= $form->field($model, 'event_id')->hiddenInput(['maxlength' => true,'class'=>'eventID'])->label(false)?>

    <?= $form->field($model, 'date_period')->textInput(['class'=>'form-control m-b-1 datepicker','data-provide'=>'datepicker','style' => 'width: 100%']) ?>                

    <div class="input-group">
        <input type="text" class="form-control time-picker"> <input type="text" class="form-control time-picker">
       
    </div>

    <?= $form->field($model, 'limit')->textInput(['type'=>'number']) ?>

    <?= $form->field($model, 'status', ['options' => ['tag' => 'false']])-> dropDownList([1=> 'Enable', 0=>'Disable'],
        ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%']);  
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
