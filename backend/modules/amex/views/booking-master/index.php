<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\amex\models\BookingMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Booking Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-master-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Booking Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bookingID',
            'referenceNum',
            'bookingStatus',
            'customerID', // display name , mobile, cardtype, cardholdertype, customerhandicap
            'GID', // golfer name from remote
            [ 'format' => 'html', 
               'label' => 'Date Of Play',
               'attribute'=>'dateOfPlay', 
               //'filter'=>['1'=>'text','2'=>'jpg'], //with custome sarch
               'value'=>function ($data){ 
                   return '<SMALL>'.$data->dateOfPlay .' '.$data->preferredTimeOfPlay .'</SMALL>';
                } 
             ],
            //'dateOfPlay',
           
            //'preferredTimeOfPlay',
            'timeOfPlay1',
            'timeOfPlay2',
            'confirmedTimeOfPlay',
            'outOfTAT',
            'dateOfBooking',
            'numOfGolfers', // detail add golfer in popup
            //'customerID',
            
            //'ConfirmDateTime',
            //'isEscalated',
           
            //'cancellationReasonID',
            //'cancellationReason:ntext',
           
            //'comment:ntext',
            //'conciergeRemarks:ntext',
            //'isosRemarks:ntext',
            //'golflanRemarks:ntext',
            //'masterRemarks:ntext',
            //'isActive',
            //'createdOn',
            //'lastUpdated',
            'createdBy',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
