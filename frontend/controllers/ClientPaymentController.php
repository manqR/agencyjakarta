<?php

namespace frontend\controllers;

use Yii;
use frontend\models\PembayaranClient;
use frontend\models\TagihanClient;
use frontend\models\Contract;
use frontend\models\Client;
use frontend\models\PembayaranClientSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\web\Response;

/**
 * ClientPaymentController implements the CRUD actions for PembayaranClient model.
 */
include 'inc/money.php';
include 'inc/table.php';


class ClientPaymentController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PembayaranClient models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PembayaranClientSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PembayaranClient model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        
        $invoice = TagihanClient::findOne(['invoice_id'=>$model->invoice_id]);
        $contract = Contract::findOne(['contract_id'=>$invoice->contract_id]);
        $client = Client::findOne($invoice->client_id);

        $arr = array(
            $contract,
            $client
        );
        return $this->render('view', [
            'model' => $this->findModel($id),
            'arr' => $arr,
        ]);
    }
 
    /**
     * Creates a new PembayaranClient model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PembayaranClient();

        if ($model->load(Yii::$app->request->post())){
            
            $find  = PembayaranClient::find()
            ->orderBy(['urutan'=>SORT_DESC])
            ->One();
             $kode = '';


            if(isset($find)){
                if(substr($find->payment_number,4,2) ==  date('y')){
                    $last = substr($find->payment_number,-3) +1;
                    if($last < 10){
                        $last = '00'.$last;
                    }else if($last < 100){
                        $last = '0'.$last;
                    }else{
                        $last = $last;
                    }
                    $kode = 'PAY-'.date('y').'-'.date('m').'-'.$last;
                }else{
                    $kode = 'PAY-'.date('y').'-'.date('m').'-'.'001';
                }  
            }else{
                $kode = 'PAY-'.date('y').'-'.date('m').'-'.'001';
            }  

            $model->prove_file = UploadedFile::getInstance($model,'prove_file');
            if(isset($model->prove_file)){
                $uploadDir = Yii::getAlias('@webroot/upload/payment/'.str_replace(' ', '', $kode));
                if(!is_dir("upload/payment/". str_replace(' ', '', $kode) ."/")) {
                    mkdir("upload/payment/".  str_replace(' ', '', $kode)  ."/");
                }                                           
                $model->prove_file->saveAs($uploadDir.'/'.$model->prove_file);	
            }else{
                $model->prove_file = $model->prove_file;
            }

            $model->payment_number = $kode;
            $model->nominal = SaveRupiah($model->nominal);
           
            $model->create_date = date('Y-m-d H:i:s');
            $model->create_by = Yii::$app->user->identity->username;
         
            
            if($model->status == 1){
                $invoice = TagihanClient::findOne(['invoice_id'=>$model->invoice_id]);
                
                $nominal = $invoice->nominal - $model->nominal ;             
                $invoice->nominal = $nominal;                
                $invoice->save(false);
                
            }
            if($model->save(false)){
                Yii::$app->session->setFlash('success');
            }

            return $this->redirect(['index']); 
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionDownload($id, $file){

        $path = Yii::getAlias('@webroot').'/upload/payment/'.$id.'/'.$file.'';       
        
        var_dump($path);
        if (file_exists($path)) {
            return Yii::$app->response->sendFile($path);
        }
    }

    public function actionActionPayment(){

        if($_POST){
            $var = explode(';',$_POST['data']);

            $model = PembayaranClient::findOne(['payment_number'=>$var[0]]);
            $model->status = $var[1];
            $model->save(false);

            if($var[1] == 1){
                $tagihan = TagihanClient::findOne(['invoice_id'=>$model->invoice_id]);
                $tagihan->nominal = $tagihan->nominal - $model->nominal;
                $tagihan->save(false);               
            }

            $data = [
                'msg'=>'success'
            ]; 

        }else{
            $data = [
                'data'=>'method not allowed'
            ];           
        }
        Yii::$app->response->format = Response::FORMAT_JSON;
        return $data;
    }

    /**
     * Updates an existing PembayaranClient model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->urutan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PembayaranClient model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PembayaranClient model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PembayaranClient the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PembayaranClient::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
