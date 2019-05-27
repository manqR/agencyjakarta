<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form card card-block">

    <?php  $form = ActiveForm::begin([
        'options'=>[
                'enctype'=>'multipart/form-data',
                ]			
            ]);                    
    ?> 

    <?= $form->field($model, 'slider_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slider_image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flag', ['options' => ['tag' => 'false']])-> dropDownList([1=> 'Enable', 0=>'Disable'],
        ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%'])->label('Status');  
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
