<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Event;
use frontend\models\EventSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

include 'inc/money.php';
/**
 * EventController implements the CRUD actions for Event model.
 */
class EventController extends Controller
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
     * Lists all Event models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EventSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Event model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Event model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Event();

        if ($model->load(Yii::$app->request->post())){

            $model->img_event = UploadedFile::getInstance($model,'img_event');
            if(isset($model->img_event)){
                $uploadDir = Yii::getAlias('@webroot/upload/event/'.str_replace(' ', '', $model->event_name));
                if(!is_dir("upload/event/". str_replace(' ', '', $model->event_name) ."/")) {
                    mkdir("upload/event/".  str_replace(' ', '', $model->event_name)  ."/");
                }                                           
                $model->img_event->saveAs($uploadDir.'/'.$model->img_event);	
            }else{
                $model->img_event = $model->img_event;
            }

            $model->price = SaveRupiah($model->price);
            $model->save(false);
            Yii::$app->session->setFlash('success');
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Event model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())){
            
            $model->img_event = UploadedFile::getInstance($model,'img_event');
            if(isset($model->img_event)){
                $uploadDir = Yii::getAlias('@webroot/upload/event/'.str_replace(' ', '', $model->event_name));
                if(!is_dir("upload/event/". str_replace(' ', '', $model->event_name) ."/")) {
                    mkdir("upload/event/".  str_replace(' ', '', $model->event_name)  ."/");
                }                           
                $model->img_event->saveAs($uploadDir.'/'.$model->img_event);	
            }else{
                $x = $this->findModel($id);
                $model->img_event = $x->img_event;            
            }

            $model->price = SaveRupiah($model->price);
            $model->save(false);
            Yii::$app->session->setFlash('update');
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Event model.
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
     * Finds the Event model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Event the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Event::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
