<?php


namespace frontend\controllers;

use Yii;
use yii\web\Response;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\Fcm;
use frontend\models\Spg;
use frontend\models\Provinces;
use frontend\models\SpgSocial;
use frontend\models\SpgExperience;



class ApiController extends Controller{

    
	public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
	
	public static function allowedDomains(){
		return [
			'*',				
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

    public function actionListEvent(){
        $fcm = Fcm::find(["deviceId"=>"ea38a828c99dda82"])
				->orderBy(['urutan'=>SORT_DESC])
				->One();
		
		// var_dump($fcm->token);
		
		$contentArray = array(    
			"to" => $fcm->token,
			"data" => array(
				"title" => "AgencyJakarta",
				"body"  => "Hai, XXX Selamat kamu berhasil mendaftar sebagai salah satu mitra agencyjakarta, Silahkan melakukan login dan lengkapi aplikasi mu",
				"sound" => "default",
				
			)
		);
		$jsonData = json_encode($contentArray);
		// echo $jsonData;
		// die;
		$link = "https://fcm.googleapis.com/fcm/send";
		$header = array();
		$header[] = "Content-type: application/json";
		$header[] = "Authorization: key=AAAAOOZb2dw:APA91bE_fdbr76ok8DcQewQSBnpVOHQ-LhHR3S6WLw2-ycWqc941DYbWR3EFbTLJxPrKUVCKjYZ5Of-MSZNCYI2m7fmEH91teQHwXnPbm7nTdy0GzkhxurONV4Ds8hLSlnA99WpULTDM";
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
		curl_exec($ch);
		curl_close($ch);
    }
	
	public function actionFcmToken(){
		if($_POST){
			
			$model = new Fcm();
			$model->token = $_POST['Token'];
			$model->deviceId = $_POST['DeviceId'];
			$model->save(false);
		}
		
		
	}
	public function actionLogin(){
		
		if($_POST){
			$model = Spg::find()
				->where(['email'=>$_POST['email']])
				->AndWhere(['password'=>$_POST['password']])
				->One();
			if($model){
				$data = [
					'msg'=>'success',
					'token'=>$model->auth_key,
				];
				Yii::$app->response->format = Response::FORMAT_JSON;
				return $data;
			}
		}
	}
	
	public function actionProfile(){
		if($_POST){
			$model = Spg::find()
				->where(['auth_key'=>$_POST['token']])
				->One();
			if($model){
				$data = [
					'msg'=>'success',
					'username'=>$model->username,
					'first_name'=>$model->first_name,
					'last_name'=>$model->last_name,
					'phone'=>$model->phone,
					'email'=>$model->email,
					'address'=>$model->address,
					'description'=>$model->description,
					'ktp'=>$model->ktp,
					'bod'=>$model->bod,
					'high'=>$model->high,
					'weight'=>$model->weight,
					'language'=>$model->language,
					'face'=>$model->face,
				];
				Yii::$app->response->format = Response::FORMAT_JSON;
				return $data;
			}
		}
			
	}
	
	public function actionProvince(){
		if($_POST){
			$model = Spg::find()
				->where(['auth_key'=>$_POST['token']])
				->One();
				
			if($model){
				$location = Provinces::find()
						->all();
				
			
			$data = array();
				
			foreach($location as $key =>$locations):
				$data[$key] = [
					'id'=>$locations->id,
					'location'=>$locations->name,
				];
			endforeach;
			
			$province = $data;
			Yii::$app->response->format = Response::FORMAT_JSON;
			return $province;
			}
		}
	}
	public function actionUpdateProfile(){
		if($_POST){
			$model = Spg::find()
				->where(['auth_key'=>$_POST['token']])
				->One();
				
			if($model){
				
				$model->username = $_POST['username'];
				$model->first_name = $_POST['name'];
				$model->email = $_POST['email'];
				$model->bod = isset($_POST['birthday']) ? $_POST['birthday'] : '';
				$model->address = isset($_POST['location']) ? $_POST['location'] : '';
				$model->phone = isset($_POST['phone']) ? $_POST['phone'] : '';
				$model->description = isset($_POST['about']) ? $_POST['about'] : '';
				$model->save(false);
			
				$data = array();
				$data = [
					'msg'=>'success',
				];
				
				Yii::$app->response->format = Response::FORMAT_JSON;
				return $data;
			}
		}
	}
	
	public function actionSocial(){		
		if($_POST){
			$model = Spg::find()
				->where(['auth_key'=>$_POST['token']])
				->One();

			if($model){
				
				$data = array();							
				$social = SpgSocial::find()
						->where(['username'=>$model->username])
						->AndWhere(['flag'=>1])
						->All();
				foreach($social as $i => $socials):
					$data[$i] = [
						'msg'=>'success',
						'icons'=>$socials->icons,
						'link'=>$socials->link,
					];
									
				endforeach;
				
				$output = $data;
				
				Yii::$app->response->format = Response::FORMAT_JSON;
				return $output;
			}
		}
	}
	public function actionUpdateSocial(){		
		if($_POST){
			$model = Spg::find()
				->where(['auth_key'=>$_POST['token']])
				->One();

			if($model){
				
				$findSocial = SpgSocial::find()
						->Where(['username'=>$model->username])
						->AndWhere(['icons'=>$_POST['model']])
						->One();
				if(isset($findSocial)){
						$findSocial->link = isset($_POST['link']) ? $_POST['link'] : '';
						$findSocial->save();
				}else{
					
					$social = new SpgSocial();
				
					$social->username = $model->username;
					$social->icons = $_POST['model'];
					$social->link =  isset($_POST['link']) ? $_POST['link'] : '';
					$social->flag = 1;					
					$social->save();					
				}
								
				$output = [
				
					'msg'=>'success',
				];
				
				Yii::$app->response->format = Response::FORMAT_JSON;
				return $output;
			}
		}
	}
	public function actionExperience(){		
		if($_POST){
			$model = Spg::find()
				->where(['auth_key'=>$_POST['token']])
				->One();

			if($model){
				
				$exp = new SpgExperience();				
				$exp->username = $model->username;
				$exp->title = $_POST['title'];
				$exp->company = $_POST['company'];
				$exp->start_date = $_POST['year'];
				$exp->delete_status = 0;
			
				$exp->save();	
			
				if($exp)
				$output = [
				
					'msg'=>'success',
				];
				
				Yii::$app->response->format = Response::FORMAT_JSON;
				return $output;
			}
		}
	}
	public function actionListExperience(){		
		if($_POST){
			$model = Spg::find()
				->where(['auth_key'=>$_POST['token']])
				->One();

			if($model){
				
				$listExperience = SpgExperience::find()
						->Where(['username'=>$model->username])
						->All();
				
				$data = array();
				
				foreach($listExperience as $key =>$listExperiences):
					$data[$key] = [
						'title'=>$listExperiences->title,
						'company'=>$listExperiences->company,
						'start_date'=>$listExperiences->start_date,
					];
				endforeach;
				
				Yii::$app->response->format = Response::FORMAT_JSON;
				return $data;
			
			}
		}
	}
		
		

}
?>