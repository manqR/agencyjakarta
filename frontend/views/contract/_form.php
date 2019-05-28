<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Contract */
/* @var $form yii\widgets\ActiveForm */

$this->registerJs("
    function Client(){
        tableShow('.dataclient','?r=api/client');
    }
    $(document).on(\"click\", \".choose-client\", function () {		
        var data = $(this).data('id');
        var arr = data.split(';');

        $('.clientID').val(arr[0]);
        $('.clientName').val(arr[1]);
        $('.client').modal('hide');      
    });
    Client();

    $(\".datepicker\").datepicker({ 
        format: 'yyyy-mm-dd'
    });

");
$this->registerCss("
    .search-open-icon , .choose-client{
        cursor:pointer
    }
");
?>


<div class="contract-form card card-block">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contract_id')->textInput(['maxlength' => true])->label('Contract Number') ?>

    <label>Client ID</label>
    <div class="input-group m-b">
        <input type="text" class="form-control clientName" readonly>
        <span class="input-group-addon"><i class="search-open-icon icon-magnifier" aria-hidden="true" title="Search Client" data-toggle="modal" data-target=".client"></i></span>
    </div>
    <?= $form->field($model, 'idclient')->hiddenInput(['maxlength' => true,'class'=>'clientID'])->label(false)?>

    <?= $form->field($model, 'pic_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pic_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pic_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->textInput(['class'=>'form-control m-b-1 datepicker','data-provide'=>'datepicker','style' => 'width: 100%']) ?>                

    <?= $form->field($model, 'end_date')->textInput() ?>

    <?= $form->field($model, 'number_of_spg')->textInput() ?>
    
    <?= $form->field($model, 'description')->textarea(['rows' => 6,'class'=>'summernote']) ?>

    <?= $form->field($model, 'contract_status', ['options' => ['tag' => 'false']])-> dropDownList([1=> 'Enable', 0=>'Disable'],
        ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%'])->label('Contract Status');  
    ?>

    <?= $form->field($model, 'payment_status', ['options' => ['tag' => 'false']])-> dropDownList([1=> 'Paid', 0=>'UnPaid',2=>'Down Payment'],
        ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%'])->label('Payment Status');  
    ?>

    <?= $form->field($model, 'upload_file')->fileInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>



<!-------------- MODAL ------------------>
<div class="modal fade client" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 1000px" >
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Client</h4>
			</div>
			<div class="modal-body">
                <table class="table table-bordered dataclient" style="width:100%">
					<thead>
						<tr>
							<th>Client Name</th>									
							<th>Company Name</th>
							<th>Address</th>
							<th>Email</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
				</table>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>						
			</div>
		</div>
	</div>
</div>
<!-- ------------ /MODAL ------------------>