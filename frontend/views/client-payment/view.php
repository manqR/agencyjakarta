<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PembayaranClient */

$this->title = $model->payment_number;
$this->params['breadcrumbs'][] = ['label' => 'Client Payment', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


$this->registerJs("
    $(document).on(\"click\", \".actions\", function () {		
        var datas = $(this).data('id');
        var arr = datas.split(';');

        console.log(arr[1]);
        var act = '';
        if(arr[1] == 1){
            act = 'Approve';
        }else{
            act = 'Reject';
        }
        swal({
            title: 'Are You Sure ?',
            text: act +' this payment ?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes, '+act+'!',
            closeOnConfirm: false
        }, function() {			
            $.post('?r=client-payment/action-payment',{
                data: datas
            },
            function(data, status){                
                showPayment();                    
                swal('Saving!', 'Payment Succesfully '+act, 'success');                                                                 
            });
        });
                                                                
    })    

");

$this->registerCss("

    table{
        width:100%
    }
    td{
        padding-left: 8px; 
        padding-top: 5px; 
        padding-right: 8px; 
        padding-bottom: 10px;
    }
    td.left {
        width:16%;
    }
    tr {
        border-bottom: 1px solid #EEEEEE;
    }
    a.btn.btn-success.menu , a.btn.btn-warning.menu{
        color:#FFF;
        margin-bottom:15px;
        margin-left: 5px;
    }
    th{
        width:30%;
    }
    
    .actions {
        cursor:pointer;
        margin:5px;
    }
    
");

$this->registerJs("
    function showPayment(){
        tableShow('.payments','?r=api/payment-list&id='+'$model->invoice_id');
    }
    showPayment();

");


?>
<div class="pembayaran-client-view card card-block">

    <?= TableClientDetail($arr); ?>
</div>

<h4>List of Payment</h4>
<div class="card card-block table-responsive" style="margin-top:20px">        
    <table class="table table-bordered payments" style="width:100%">
        <thead>            
            <tr>
                <th>Actions</th>
                <th>Payment Number</th>
                <th>Payment Menthod</th>
                <th>Bank Name</th>									
                <th>Account Name</th>                
                <th>Payment Date</th>
                <th>Upload File</th>
                <th>Nominal</th>
                <th>Status</th>
            </tr>
        </thead>
    </table>
</div>
