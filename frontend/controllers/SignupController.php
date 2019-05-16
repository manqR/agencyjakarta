<?php


namespace frontend\controllers;

use Yii;
use yii\web\Response;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use frontend\models\Spg;


class SignupController extends Controller{

    
    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public static function allowedDomains(){
		return [
            '*',
            'http://localhost:8000/'				
		];
	}
	
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
		return array_merge(parent::behaviors(), [
			'corsFilter'  => [
				'class' => \yii\filters\Cors::className(),
				'cors'  => [					
                    'Access-Control-Allow-Origin'      =>static::allowedDomains(),			
					'Access-Control-Allow-Credentials' => true,
					'Access-Control-Max-Age'           => 3600,    
				],
			],

		]);
    }

    // public function beforeAction($action) {
    //     $this->enableCsrfValidation = false;
    //     return parent::beforeAction($action);
    // }

    public function actionCreate(){
        
        $model = new Spg();
        $data = array();
        if($_POST){
            $model->username = $_POST['username'];
            $model->email = $_POST['email'];
            $model->auth_key = Yii::$app->security->generateRandomString();
            $model->password = $_POST['password'];
            $model->status = 1;
            $model->created_at = date('Y-m-d');
            $model->save(false);
            if($model){
                $data = Yii::$app->request->csrfToken;
            }
            
        }else{
            $data = [
                'error'=>'Method Not Allowed'
            ];
        }
       
        // Yii::$app->response->format = Response::FORMAT_JSON;
        $data = json_encode($data);
        echo $data;

        // echo 's';

        
    }
}
?>