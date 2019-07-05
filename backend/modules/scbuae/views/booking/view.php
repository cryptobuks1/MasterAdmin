<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\Booking */

$this->title = $model->BookingId;
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="booking-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->BookingId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->BookingId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'BookingId',
            'CustomerCareExecutiveId',
            'GolferId',
            'GolfCourseId',
            'TeeTimeId:datetime',
            'ConfirmTeeTime',
            'DateOfPlay',
            'DateOfRequest',
            'NoOfGuest',
            'GuestPaymentId',
            'Guest1Type',
            'Guest1Name',
            'Guest1Email:email',
            'Guest1Mobile',
            'Guest1Handicap',
            'Guest1MembershipNumber',
            'Guest2Type',
            'Guest2Name',
            'Guest2Email:email',
            'Guest2Mobile',
            'Guest2Handicap',
            'Guest2MembershipNumber',
            'Guest3Type',
            'Guest3Name',
            'Guest3Email:email',
            'Guest3Mobile',
            'Guest3Handicap',
            'Guest3MembershipNumber',
            'PaymentMethod',
            'PaymentMethodComment',
            'BookingStatusId',
            'OutOfTATStatus',
            'Comment',
            'IsActive',
            'LastUpdated',
            'CreatedOn',
        ],
    ]) ?>

</div>
