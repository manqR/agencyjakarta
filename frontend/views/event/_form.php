<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use yii\helpers\ArrayHelper;
use frontend\models\Grade;

/* @var $model frontend\models\Event */
/* @var $form yii\widgets\ActiveForm */

$this->registerJs("
    function Contract(){
        tableShow('.datacontract','?r=api/contract');
    }
    $(document).on(\"click\", \".choose-contract\", function () {		
        var data = $(this).data('id');
        $('.contractID').val(data);
        $('.contract').modal('hide');      
    });
    Contract();

");
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

$this->registerCss("
    .search-open-icon , .choose-contract{
        cursor:pointer
    }
");
?>

<div class="event-form card card-block">

    <?php  $form = ActiveForm::begin([
    	'options'=>[
    	        'enctype'=>'multipart/form-data',
    	        ]			
    	    ]); 
		
           
    ?> 
    <label>Contract ID</label>
    <div class="input-group m-b">
        <input type="text" class="form-control contractID" readonly>
        <span class="input-group-addon"><i class="search-open-icon icon-magnifier" aria-hidden="true" title="Search Contract" data-toggle="modal" data-target=".contract"></i></span>
    </div>
    <?= $form->field($model, 'contract_id')->hiddenInput(['maxlength' => true,'class'=>'contractID'])->label(false)?>

    <?= $form->field($model, 'event_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grade_spg', ['options' => ['tag' => 'false']])-> dropDownList(
        ArrayHelper::map(Grade::find()->where(['flag'=>1])->all(),'grade_code','grade'),
        ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%'])->label('Grade');  
    ?>

    <?= $form->field($model, 'img_event')->fileInput(['maxlength' => true])->label('Image') ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6,'class'=>'summernote']) ?>

    <?= $form->field($model, 'price')->textInput(['onkeyup' => 'js:formatAsRupiah(this);' ])->label('Event Price / Person') ?>

    <?= $form->field($model, 'status', ['options' => ['tag' => 'false']])-> dropDownList([1=> 'Enable', 0=>'Disable'],
        ['prompt'=>'- Select -','class'=>'select2 m-b-1','style' => 'width: 100%']);  
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>





<!-------------- MODAL ------------------>
<div class="modal fade contract" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 1000px" >
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Contract</h4>
			</div>
			<div class="modal-body">
                <table class="table table-bordered datacontract" style="width:100%">
					<thead>
						<tr>
							<th>Contract ID</th>
							<th>Client Name</th>									
							<th>Start Date</th>
							<th>End Data</th>
							<th>Description</th>
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