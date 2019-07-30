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

            
            if($model->multipleCards){
            
            $model->scenario = Booking::SCENARIO_MULTICARD;
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
