<?php

namespace backend\modules\amex\controllers;

use Yii;
use backend\modules\amex\models\CardHolder;
use backend\modules\amex\models\CardHolderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\modules\amex\models\CardType;
use backend\modules\amex\models\BookingMaster;
use backend\modules\amex\models\GolfCourseMaster;
use backend\modules\amex\models\GolfCourseMasterSearch;

function pre($ar,$l=null){
    echo "<pre>".$l;
    print_r($ar);
    echo "</pre>";
}
/**
 * CardHolderController implements the CRUD actions for CardHolder model.
 */
class CardHolderController extends Controller
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
     * Lists all CardHolder models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CardHolderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CardHolder model.
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

    public function actionCard($id,$cardtype)
    {
        $detail=$this->findModelbymobile($id,$cardtype);
        pre($detail);
        if(sizeof($detail)>1){
            echo "multiple card";
        }
    }

    public function actionGolf($id=null)
    {

        
       // $model=GolfCourseMaster::find()->where(['GID'=>(int)$id])->asArray()->one();
        $model['days']=CardHolder::getDatesArr(15);
        $model['GC']=(int)$id;
        $model['GOlferName']=(int)$id;
            foreach($model['days'] as $dt){
            $isWeekend=(date('N', strtotime($dt)) >= 6) ? true:false;
            $GolfDetail=$this->GetRounds((int)$id,$dt,1); //1= AMEX else=ISOS
            //$IsosGolfDetail=$this->GetRounds((int)$id,$dt,1);
                $model['booking'][$dt]=[
                    'PlatinamBooking'=>$GolfDetail['PlatinamBooking'],
                    'Centurion'=>$GolfDetail['CenturionBooking'],
                    'Charge'=>$GolfDetail['ChargeBooking'],
                    'Amex'=>[
                        'weekend'=>($isWeekend)?'YES':'NO',
                        'limit'=>(!$isWeekend)?$GolfDetail['AMEXConciergeWeekdayRounds']:$GolfDetail['AMEXConciergeWeekendRounds'],
                        'PlayBooked'=>isset($GolfDetail['AmexTotalBooked'])?$GolfDetail['AmexTotalBooked']:0,
                        'learnBooked'=>'',
                ],
                    'Isos'=>[
                        'weekend'=>($isWeekend)?'YES':'NO',
                        'limit'=>(!$isWeekend)?$GolfDetail['ISOSWeekdayRounds']:$GolfDetail['ISOSWeekendRounds'],
                        'PlayBooked'=>isset($GolfDetail['IsosTotalBooked'])?$GolfDetail['IsosTotalBooked']:0,
                        'learnBooked'=>''

                    ]
                ];
            }
        unset($model['days']);
        pre($model);
    }

    private function GetRounds($GID,$date,$accountType,$playType=1){
        //$date='2019-07-28';
        $accountTypeName=($accountType==1)?'AMEXConciergeActive':'ISOSActive';
        $Cards=($accountType==1)?[2,3]:[1];
        
         $AmexCards=[2,3];
         $isosCards=[1];

        $data=GolfCourseMaster::find()
            ->where(['GID'=>$GID ,'golfCourseTypeID'=>$playType, $accountTypeName=>1])
            ->asArray()->one();
        if(!$data){ //NO CAPPING
            $data['AMEXConciergeWeekdayRounds']=999;
            $data['AMEXConciergeWeekendRounds']=999;
            $data['ISOSWeekdayRounds']=999;
            $data['ISOSWeekendRounds']=999;
        }
        
            $data['AMEXConciergeWeekdayRounds']=($data['AMEXConciergeWeekdayRounds']==-1)?999:$data['AMEXConciergeWeekdayRounds'];
            $data['AMEXConciergeWeekendRounds']=($data['AMEXConciergeWeekendRounds']==-1)?999:$data['AMEXConciergeWeekendRounds'];
            $data['ISOSWeekdayRounds']=($data['ISOSWeekdayRounds']==-1)?999:$data['ISOSWeekdayRounds'];
            $data['ISOSWeekendRounds']=($data['ISOSWeekendRounds']==-1)?999:$data['ISOSWeekendRounds'];
            //pre($data,120);exit;
            $data['date']=$date;
            $sql=BookingMaster::find()
                ->joinwith('customer')->select('sum(numOfGolfers) totalbooked')
              ->andFilterWhere(['dateOfPlay'=>$date])->andFilterWhere(['in', 'bookingStatus', BookingMaster::ACTIVE])
              ->andFilterWhere(['in', 'CardTypeID', $AmexCards])->createCommand()->getRawSql();

            $IsosSql= BookingMaster::find()
            ->joinwith('customer')->select('sum(numOfGolfers) totalbooked')
            ->andFilterWhere(['dateOfPlay'=>$date])->andFilterWhere(['in', 'bookingStatus', BookingMaster::ACTIVE])
            ->andFilterWhere(['in', 'CardTypeID', $isosCards])->createCommand()->getRawSql();

          $data['AmexTotalBooked']=Yii::$app->get('amexDB')->createCommand($sql)->queryAll()[0]['totalbooked'];
          $data['IsosTotalBooked']=Yii::$app->get('amexDB')->createCommand($IsosSql)->queryAll()[0]['totalbooked'];
         
          /**
           * USE FOR DUMP PURPOSE ONLY
           */
          $PlatinamBooking= BookingMaster::find()->joinwith('customer')->select('sum(numOfGolfers) totalbooked')->andFilterWhere(['dateOfPlay'=>$date])->andFilterWhere(['in', 'bookingStatus', BookingMaster::ACTIVE])->andFilterWhere(['in', 'CardTypeID', [1]])->createCommand()->getRawSql();
          $CenturionBooking= BookingMaster::find()->joinwith('customer')->select('sum(numOfGolfers) totalbooked')->andFilterWhere(['dateOfPlay'=>$date])->andFilterWhere(['in', 'bookingStatus', BookingMaster::ACTIVE])->andFilterWhere(['in', 'CardTypeID', [2]])->createCommand()->getRawSql();
          $ChargeBooking= BookingMaster::find()->joinwith('customer')->select('sum(numOfGolfers) totalbooked')->andFilterWhere(['dateOfPlay'=>$date])->andFilterWhere(['in', 'bookingStatus', BookingMaster::ACTIVE])->andFilterWhere(['in', 'CardTypeID', [3]])->createCommand()->getRawSql();
          $data['PlatinamBooking']=Yii::$app->get('amexDB')->createCommand($PlatinamBooking)->queryAll()[0]['totalbooked'];
          $data['CenturionBooking']=Yii::$app->get('amexDB')->createCommand($CenturionBooking)->queryAll()[0]['totalbooked'];
          $data['ChargeBooking']=Yii::$app->get('amexDB')->createCommand($ChargeBooking)->queryAll()[0]['totalbooked'];
        
                // pre($data,120);exit;
            return $data;     
    }
    

    /**
     * Creates a new CardHolder model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CardHolder();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->CardHolderID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CardHolder model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->CardHolderID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CardHolder model.
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
     *  //\Yii::$app->user->identity->company_id
     * Finds the CardHolder model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CardHolder the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelbymobile($mobile,$CardTypeID=null)
    {
        $CardTypeID=($CardTypeID) ? $CardTypeID :$CardTypeID;
       
        if (($model = CardHolder::find()
            ->andFilterWhere(['Mobile' => (int)$mobile,'IsActive'=>1,'CardTypeID'=>$CardTypeID])
            ->andFilterWhere(['in', 'CardTypeID', [1,2,3,4,5]])
            ->asArray()->all()) !== null) {
            
                echo sizeof($model);

           for($i=0;$i<sizeof($model);$i++){
            $model[$i]['CardTypeName']=CardType::find()->where(['CardTypeID'=>$model[$i]['CardTypeID'],'IsActive'=>1])->asArray()->one()['CardTypeName'];
            $model[$i]['LastPlayBooking']=BookingMaster::find()
                ->andFilterWhere(['customerID'=>$model[$i]['CardHolderID'],'IsActive'=>1])
                ->andFilterWhere(['in', 'bookingStatus', BookingMaster::ACTIVE])
                ->orderBy(['dateOfPlay' => SORT_DESC,])
                ->asArray()->one();

                $date = new \DateTime('now');
                $todayDate=$date->format(CardHolder::SERVER_FORMAT);
                $date->modify('last day of this month');
                $lastDate= $date->format(CardHolder::SERVER_FORMAT);
                $date->modify('First day of this month');
                $FirstDate= $date->format(CardHolder::SERVER_FORMAT);
           // pre($model);exit;
            $model[$i]['MonthlyBookingCount']=BookingMaster::find()
                ->select('count(numOfGolfers) totalbooked')
                ->andFilterWhere(['customerID'=> $model[$i]['CardHolderID']])
                ->andFilterWhere(['between','dateOfPlay',$FirstDate,$lastDate])
                ->andFilterWhere(['in', 'bookingStatus', BookingMaster::ACTIVE])
                ->asArray()->one();

                if(( $todayDate < $model[$i]['LastPlayBooking']['dateOfPlay'])){
                    $error='Booking Alery Done, You can book next after play';
                }

                if(CardHolder::CardLimit[CardHolder::CardTypeName[$model[$i]['CardTypeID']]]['play'] <=$model[$i]['MonthlyBookingCount']['totalbooked']){
                    $error='Monthly Quota Limit Over';
                }
               
                $model[$i]['MonthlyBookingCount']['MonthlyQuota']=CardHolder::CardLimit[CardHolder::CardTypeName[$model[$i]['CardTypeID']]]['play'];
                $model[$i]['MonthlyBookingCount']['CanBook']=isset($error)?$error:'yes';
                
                $todayDate;

            // $model[$i]['LastBooked']=BookingMaster::find()
            //     ->andFilterWhere(['customerID'=>$model[$i]['CardHolderID'],'IsActive'=>1])
            //     ->andFilterWhere(['in', 'bookingStatus', BookingMaster::ACTIVE])
            //     ->orderBy(['dateOfBooking' => SORT_DESC])
            //     ->asArray()->one();
           }
           
            return $model;
        }
        throw new NotFoundHttpException('The requested does not exist.');
    }



    protected function findModel($id)
    {
        if (($model = CardHolder::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
