<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\scbuae\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bookings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Booking', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'BookingId',
            'CustomerCareExecutiveId',
            'GolferId',
            'GolfCourseId',
            'TeeTimeId:datetime',
            //'ConfirmTeeTime',
            //'DateOfPlay',
            //'DateOfRequest',
            //'NoOfGuest',
            //'GuestPaymentId',
            //'Guest1Type',
            //'Guest1Name',
            //'Guest1Email:email',
            //'Guest1Mobile',
            //'Guest1Handicap',
            //'Guest1MembershipNumber',
            //'Guest2Type',
            //'Guest2Name',
            //'Guest2Email:email',
            //'Guest2Mobile',
            //'Guest2Handicap',
            //'Guest2MembershipNumber',
            //'Guest3Type',
            //'Guest3Name',
            //'Guest3Email:email',
            //'Guest3Mobile',
            //'Guest3Handicap',
            //'Guest3MembershipNumber',
            //'PaymentMethod',
            //'PaymentMethodComment',
            //'BookingStatusId',
            //'OutOfTATStatus',
            //'Comment',
            //'IsActive',
            //'LastUpdated',
            //'CreatedOn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
