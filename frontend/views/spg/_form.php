<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use yii\helpers\ArrayHelper;
use frontend\models\Bank;
use frontend\models\City;
/* @var $this yii\web\View */
/* @var $model frontend\models\Spg */
/* @var $form yii\widgets\ActiveForm */

$this->registerJs("
    $(\".datepicker\").datepicker({ 
        format: 'yyyy-mm-dd'
    });
");

?>

<div class="spg-form card card-block">

    <?php $form = ActiveForm::begin(); ?>

    <div class="contents">
        <div class="items-content">   

            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true])->label('Full Name') ?>        
            <?= $form->field($model, 'bank_account', ['options' => ['tag' => 'false']])-> dropDownList(
                ArrayHelper::map(Bank::find()->where(['flag'=>1])->all(),'bank','bank'),
                ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%'])->label('Bank');  
            ?>

            <?= $form->field($model, 'account_number')->textInput(['maxlength' => true]) ?>                    
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'city', ['options' => ['tag' => 'false']])-> dropDownList(
                ArrayHelper::map(City::find()->all(),'city_name','city_name'),
                ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%'])->label('Bank');  
            ?>
            <?= $form->field($model, 'address')->textArea(['rows'=>5]) ?>


           
        </div>
        <div class="items-content">   

            <?= $form->field($model, 'ktp')->textInput(['maxlength' => true])->label('Identity Number') ?>            
            <?= $form->field($model, 'bod')->textInput(['class'=>'form-control m-b-1 datepicker','data-provide'=>'datepicker','style' => 'width: 100%']) ?>                
            <?= $form->field($model, 'high')->textInput(['type'=>'number']) ?>
            <?= $form->field($model, 'weight')->textInput(['type'=>'number']) ?>
            <?= $form->field($model, 'language')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'face')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'verified', ['options' => ['tag' => 'false']])-> dropDownList([1=>'Verified',0=>'Unverified'],
                ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%']);  
            ?> 
             <?= $form->field($model, 'status', ['options' => ['tag' => 'false']])-> dropDownList([1=>'Enable',0=>'Disable'],
                ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%']);  
            ?>           
        </div>
    </div>
    <?= $form->field($model, 'description')->textarea(['rows' => 6,'class'=>'summernote']) ?>
   
   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
