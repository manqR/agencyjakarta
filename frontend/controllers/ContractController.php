<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Contract;
use frontend\models\Client;
use frontend\models\TagihanClient;
use frontend\models\ContractSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * ContractController implements the CRUD actions for Contract model.
 */

include 'inc/money.php';
class ContractController extends Controller
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
     * Lists all Contract models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContractSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Contract model.
     * @param string $contract_id
     * @param integer $urutan
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($contract_id, $urutan)
    {
        return $this->render('view', [
            'model' => $this->findModel($contract_id, $urutan),
        ]);
    }

    /**
     * Creates a new Contract model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Contract();
        
        if ($model->load(Yii::$app->request->post())){
            

            $client = Client::findOne(['idclient'=>$model->idclient]);
            $invoice = new TagihanClient();


            $find  = TagihanClient::find()
                ->orderBy(['urutan'=>SORT_DESC])
                ->One();
            $kode = '';


            if(isset($find)){
                if(substr($find->quotation_number,4,2) ==  date('y')){
                    $last = substr($find->quotation_number,-3) +1;
                    if($last < 10){
                        $last = '00'.$last;
                    }else if($last < 100){
                        $last = '0'.$last;
                    }else{
                        $last = $last;
                    }
                    $kode = 'INV-'.date('y').'-'.date('m').'-'.$last;
                }else{
                    $kode = 'INV-'.date('y').'-'.date('m').'-'.'001';
                }  
            }else{
                $kode = 'INV-'.date('y').'-'.date('m').'-'.'001';
            }  


            $invoice->invoice_id = $kode;
            $invoice->contract_id = $model->contract_id;
            $invoice->client_id = $model->idclient;
            $invoice->nominal = SaveRupiah($model->cost);
            $invoice->invoice_address = $client->address;
            $invoice->invoice_email = $client->email;
            $invoice->invoice_name = $client->name;
            $invoice->due_date = date('Y-m-d',strtotime("+7 day"));
            $invoice->invoice_phone = $client->phone_number;
            $invoice->status = $model->payment_status;
            $invoice->create_date = date('Y-m-d H:i:s');
            $invoice->create_by = Yii::$app->user->identity->username;
            $invoice->save(false);



            $model->upload_file = UploadedFile::getInstance($model,'upload_file');
            if(isset($model->upload_file)){
                $uploadDir = Yii::getAlias('@webroot/upload/contract/'.str_replace(' ', '', $model->contract_id));
                if(!is_dir("upload/contract/". str_replace(' ', '', $model->contract_id) ."/")) {
                    mkdir("upload/contract/".  str_replace(' ', '', $model->contract_id)  ."/");
                }                                           
                $model->upload_file->saveAs($uploadDir.'/'.$model->upload_file);	
            }else{
                $model->upload_file = $model->upload_file;
            }
            // $model->upload_file = $model->upload_file;
            $model->created_date = date('Y-m-d H:i:s');
            $model->created_by = Yii::$app->user->identity->username;
            $model->cost = SaveRupiah($model->cost);
            if($model->save(false)){
                Yii::$app->session->setFlash('success');
            }
            
            return $this->redirect(['index']); 
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Contract model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $contract_id
     * @param integer $urutan
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($contract_id, $urutan)
    {
        $model = $this->findModel($contract_id, $urutan);

        $client = Client::findOne(['idclient'=>$model->idclient]);

        if ($model->load(Yii::$app->request->post())){
            

            $model->upload_file = UploadedFile::getInstance($model,'upload_file');
            if(isset($model->upload_file)){
                $uploadDir = Yii::getAlias('@webroot/upload/contract/'.str_replace(' ', '', $model->contract_id));
                if(!is_dir("upload/contract/". str_replace(' ', '', $model->contract_id) ."/")) {
                    mkdir("upload/contract/".  str_replace(' ', '', $model->contract_id)  ."/");
                }                           
                $model->upload_file->saveAs($uploadDir.'/'.$model->upload_file);	
            }else{
                $x = $this->findModel($contract_id, $urutan);
                $model->upload_file = $x->upload_file;            
            }
            
            $model->cost = SaveRupiah($model->cost);
            $model->update_date = date('Y-m-d H:i:s');
            $model->update_by = Yii::$app->user->identity->username;            
            if($model->save(false)){
                Yii::$app->session->setFlash('success');
            }
            
            return $this->redirect(['index']);                        
        }

        return $this->render('update', [
            'model' => $model,
            'client' => $client,
        ]);
    }

    public function actionDownload($id, $file){
        
        $path = Yii::getAlias('@webroot').'/upload/contract/'.$id.'/'.$file.'';       
       
        // var_dump($path);
        if (file_exists($path)) {
            return Yii::$app->response->sendFile($path);
        }
    }

    /**
     * Deletes an existing Contract model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $contract_id
     * @param integer $urutan
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($contract_id, $urutan)
    {
        $this->findModel($contract_id, $urutan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Contract model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $contract_id
     * @param integer $urutan
     * @return Contract the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($contract_id, $urutan)
    {
        if (($model = Contract::findOne(['contract_id' => $contract_id, 'urutan' => $urutan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
