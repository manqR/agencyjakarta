<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="session-content">
    <div class="card card-block form-layout">
	 
		<?php $form = ActiveForm::begin(['id' => 'validate']); ?>        
            <div class="text-center m-b">
                  <h4 class="text-uppercase">AgencyJakarta</h4>
                  <p>Please sign in to your account</p>
            </div>

            <div class="form-inputs">
                <label class="text-uppercase">Your Username</label>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class'=>'form-control input-lg', 'placeholder'=>'username'])->label(false) ?>                              
                <label class="text-uppercase">Password</label>
                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true, 'class'=>'form-control input-lg', 'placeholder'=>'Password'])->label(false) ?>                              
            </div>
           
           
            <button class="btn btn-primary btn-block btn-lg m-b" type="submit">Login</button>
           
       <?php ActiveForm::end(); ?>
    </div>
</div>