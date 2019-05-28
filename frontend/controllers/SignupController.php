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
		return array_merge(parent::behaviors(), [
	
			// For cross-domain AJAX request
			'corsFilter'  => [
				'class' => \yii\filters\Cors::className(),
				'cors'  => [
					// restrict access to domains:
					'Origin'                           => static::allowedDomains(),
					'Access-Control-Request-Method'    => ['POST'],
					'Access-Control-Allow-Credentials' => true,
					'Access-Control-Max-Age'           => 3600,                 // Cache (seconds)
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
				
                $data = [
						'token' => Yii::$app->request->csrfToken,
						'msg' => 'success',
					];
				
            }
			
            
        }else{
            $data = [
                'error'=>'Method Not Allowed'
            ];
        }
       
        Yii::$app->response->format = Response::FORMAT_JSON;
        // $data = json_encode($data);
        return $data;

        // echo 's';

        
    }
}
?>