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

    public function actionCard($id)
    {
        $detail=$this->findModelbymobile($id);
        pre($detail);
        if(sizeof($detail)>1){
            echo "multiple card";
        }
    }

    public function actionGolf($id=null)
    {
        //$id=12;
        $model=GolfCourseMaster::find()->where(['GID'=>(int)$id])->asArray()->one();
        $model['days']=CardHolder::getDatesArr(10);
        foreach($model['days'] as $day){
            $model[$day]['total']='';
            $model[$day]['booked']='';
            $model[$day]['avaliable']='';
        }
        pre($model);
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
            ->andFilterWhere(['Mobile' => (int)$mobile,'IsActive'=>1])
            ->andFilterWhere(['in', 'CardTypeID', [1,2,3,4,5]])
            ->asArray()->all()) !== null) {  
            
                echo sizeof($model);

           for($i=0;$i<sizeof($model);$i++){
            $model[$i]['CardTypeName']=CardType::find()->where(['CardTypeID'=>$model[$i]['CardTypeID'],'IsActive'=>1])->asArray()->one()['CardTypeName'];
            $model[$i]['LastPlayBooking']=BookingMaster::find()
                ->andFilterWhere(['customerID'=>$model[$i]['CardHolderID'],'IsActive'=>1])
                ->andFilterWhere(['in', 'bookingStatus', [1,2,3,5,6]])
                ->orderBy(['dateOfPlay' => SORT_DESC,])
                ->asArray()->one();
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
