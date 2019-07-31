<?php
namespace backend\modules\amex\controllers;

use Yii;
use backend\modules\amex\models\Booking;
use backend\modules\amex\models\BookingMasterSearch;
use backend\modules\amex\models\CardHolder;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use backend\modules\amex\models\Card;

function pre($arr,$l=null){
    echo "<pre>$l";
    print_r($arr);
    echo "</pre>";
}
/**
 * BookingMasterController implements the CRUD actions for BookingMaster model.
 */
class BookingController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all BookingMaster models.
     * @return mixed
     */
    public function actionIndex()
    {
       // $model = $this->findModel($id);
        $card=new Card();
        // $searchModel = new BookingMasterSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);
    }

    /**
     * Displays a single BookingMaster model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        // return $this->render('view', [
        //     'model' => $this->findModel($id),
        // ]);
    }

    public function actionAjaxdump(){
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();
           // echo "<pre>";print_r($data);//exit;
            $data['isTAT']=(strtotime( $data['date']) < strtotime('+1 days'))?true:false;
            $GolfCourseTiming=\backend\modules\amex\models\GolfCourseMaster::find()->where(['GID'=>(int)$data['GID']])->asArray()->one();
            //$timeofplay='<option value="prompt">Select Number of Golfers</option>';
            $timeofplay='<option value="prompt">Select Date Of Play</option>';
            $start = new \DateTime($GolfCourseTiming['startTime']);
            while($start->format('H:i')<$GolfCourseTiming['endTime']){
                $_totime=$start->add(new \DateInterval('PT1H'))->format('H:i');
                $_timeRangeVal=$start->format('H:i').'-'.$_totime;
                $timeofplay.= ($_totime<$GolfCourseTiming['endTime'])
                    ?'<option value="'.$_timeRangeVal.'">'.$_timeRangeVal.'</option>':'';
               // $result[] = $start->format('H:i').'-'.$start->add(new \DateInterval('PT1H'))->format('H:i');
            }
           
           // echo "<pre>";print_r($GolfCourseTiming);exit;
            //$data['timeofplay1']=$timeofplay;
            $data['timeofplay']=$timeofplay;
            $data['numberofGolfer']='';
            //$data['start-time']=
            //CardHolder::CheckTat($data['date']);
            //$date->format(CardHolder::SERVER_FORMAT)
            return $this->asJson($data);
        }
    }

    // private function create_time_range($start, $end, $interval = '60 mins', $format = '12') {
    //     $start = new \DateTime($start);
    //     while($start->format('H:i')<$end){
    //         $result[] = $start->format('H:i').'-'.$start->add(new \DateInterval('PT1H'))->format('H:i');
    //     }
       
    //     print_r($result);
    // }
    

    public function actionCard($phone=null)
    {
        pre((int)$phone);
       // $model = new Card();
      //  $customer= new CardHolder();
        // if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            
        //     return $this->redirect(['view', 'id' => $model->bookingID]);
        // }

        // return $this->render('create', [
        //     'model' => $model,
        // ]);
    }

    /**
     * Creates a new BookingMaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Booking();
      //  $customer= new CardHolder();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            if($model->completeStep1)
            {   
            $model['DUMP']=CardHolder::findModelbymobile($model->customerID,$model->cardtype);
            $session = Yii::$app->session;
            $session->set('DUMP', $model['DUMP'][0]);

           // echo "<pre>";print_r($session->get('DUMP'));exit;
            return $this->render('create-booking', [
                'model' => $model,
            ]);
            }
            else if($model->multipleCards || $model->cardValid){
             return $this->render('create', [
                'model' => $model,
            ]);
            }
           
            //return $this->redirect(['view', 'id' => $model->bookingID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    /**
     * Updates an existing BookingMaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        // $model = $this->findModel($id);

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->bookingID]);
        // }

        // return $this->render('update', [
        //     'model' => $model,
        // ]);
    }

    /**
     * Deletes an existing BookingMaster model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        // $this->findModel($id)->delete();

        // return $this->redirect(['index']);
    }

    /**
     * Finds the BookingMaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BookingMaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BookingMaster::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
