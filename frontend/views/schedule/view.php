<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Schedule */

$this->title = $arr[0]->contract_id;
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);


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
        width:10%;
    }
    
");

$contract_id = $arr[0]->contract_id;
$this->registerJs("
    function showSchedule(){
        tableShow('.schedules','?r=api/schedule-list&id='+'$contract_id');
    }
    showSchedule();

");



?>


<div class="pembayaran-client-view card card-block">
    <?= TableClientDetail($arr); ?>
</div>

<br />
<?= Html::a(' Add New',['create'],['class'=>'btn btn-success fa fa-plus']) ?>
<h4>List Schedule</h4>
<div class="card card-block table-responsive" style="margin-top:20px">        
    <table class="table table-bordered schedules" style="width:100%">
        <thead>            
            <tr>
                <th>Date Period</th>
                <th>Time Period</th>
                <th>Limit</th>
                <th>Status</th>			
                <th>Created By</th>			
                <th>Created Date</th>			
                <th>Action</th>			
            </tr>
        </thead>
    </table>
</div>

