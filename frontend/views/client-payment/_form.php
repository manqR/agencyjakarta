<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use yii\helpers\ArrayHelper;
use frontend\models\Bank;

/* @var $this yii\web\View */
/* @var $model frontend\models\PembayaranClient */
/* @var $form yii\widgets\ActiveForm */


$this->registerJs("
				
	function formatRupiah(angka, prefix){
		var number_string = angka.value.replace(/[^,\d]/g, '').toString(),
			split    = number_string.split(','),
			sisa     = split[0].length % 3,
			rupiah     = split[0].substr(0, sisa),
			ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
			
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		
		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
	
	function formatAsRupiah(el) {
		
		el.value = formatRupiah(el);					
	}",
View::POS_HEAD);


$this->registerJs("
    function Invoice(){
        tableShow('.datainvoice','?r=api/invoice');
    }
    $(document).on(\"click\", \".choose-invoice\", function () {		
        var data = $(this).data('id');
        var arr = data.split(';');

        $('.invoiceID').val(arr[0]);
        $('#billing').val(arr[1]);
        $('.invoice').modal('hide');      
    });
    Invoice();

    $(\".datepicker\").datepicker({ 
        format: 'yyyy-mm-dd'
    });

");
$this->registerCss("
    .search-open-icon , .choose-invoice{
        cursor:pointer
    }
");

?>

<div class="pembayaran-client-form card card-block">

    <?php  $form = ActiveForm::begin([
            'options'=>[
                    'enctype'=>'multipart/form-data',
                    ]			
                ]); 
            
           
    ?> 

    <label>Invoice ID</label>
    <div class="input-group m-b">
        <input type="text" class="form-control invoiceID" readonly>
        <span class="input-group-addon"><i class="search-open-icon icon-magnifier" aria-hidden="true" title="Search Invoice" data-toggle="modal" data-target=".invoice"></i></span>
    </div>    
    <?= $form->field($model, 'invoice_id')->hiddenInput(['maxlength' => true,'class'=>'invoiceID'])->label(false)?>

    <?= $form->field($model, 'payment_menthod', ['options' => ['tag' => 'false']])-> dropDownList(['Cash'=> 'Cash', 'Transfer'=>'Transfer'],
        ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%']);  
    ?>


    <?= $form->field($model, 'bank_name', ['options' => ['tag' => 'false']])-> dropDownList(
        ArrayHelper::map(Bank::find()->where(['flag'=>1])->all(),'bank','bank'),
        ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%'])->label('Bank');  
    ?>

    <?= $form->field($model, 'account_name')->textInput() ?>

    <?= $form->field($model, 'payment_date')->textInput(['class'=>'form-control m-b-1 datepicker','data-provide'=>'datepicker','style' => 'width: 100%']) ?>                

    <?= $form->field($model, 'prove_file')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nominal')->textInput(['onkeyup' => 'js:formatAsRupiah(this);' ])->label('Nominal') ?>

    <div class="form-group">
        <label>Billing</label>   
        <input type="text" class="form-control" readonly name="billing" id="billing" />
    </div>

    <?= $form->field($model, 'status', ['options' => ['tag' => 'false']])-> dropDownList([1=> 'Approve', 0=>'Reject'],
        ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%']);  
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<!-------------- MODAL ------------------>
<div class="modal fade invoice" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 1000px" >
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Invoice</h4>
			</div>
			<div class="modal-body">
                <table class="table table-bordered datainvoice" style="width:100%">
					<thead>
						<tr>
							<th>Invoice ID</th>									
							<th>Contract Number</th>
							<th>Client Name</th>
							<th>Nominal</th>
							<th>Due Date</th>
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