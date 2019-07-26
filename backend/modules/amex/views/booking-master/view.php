<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\BookingMaster */

$this->title = $model->bookingID;
$this->params['breadcrumbs'][] = ['label' => 'Booking Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="booking-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bookingID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->bookingID], [
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
            'bookingID',
            'GID',
            'dateOfPlay',
            'dateOfBooking',
            'preferredTimeOfPlay',
            'timeOfPlay1',
            'timeOfPlay2',
            'confirmedTimeOfPlay',
            'numOfGolfers',
            'customerID',
            'bookingStatus',
            'ConfirmDateTime',
            'isEscalated',
            'outOfTAT',
            'cancellationReasonID',
            'cancellationReason:ntext',
            'referenceNum',
            'comment:ntext',
            'conciergeRemarks:ntext',
            'isosRemarks:ntext',
            'golflanRemarks:ntext',
            'masterRemarks:ntext',
            'isActive',
            'createdOn',
            'lastUpdated',
            'createdBy',
        ],
    ]) ?>

</div>
