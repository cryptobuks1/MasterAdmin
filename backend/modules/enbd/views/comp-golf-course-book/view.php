<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\CompGolfCourseBook */

$this->title = $model->BookID;
$this->params['breadcrumbs'][] = ['label' => 'Comp Golf Course Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="comp-golf-course-book-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->BookID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->BookID], [
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
            'GID_OPT1',
            'GID_OPT2',
            'BookID',
            'USER_ID',
            'parent_book_id',
            'additional_email:ntext',
            'booking_type',
            'CardNo:ntext',
            'enbdVerified',
            'dateRequest',
            'dateOfPlayPref1',
            'slotOfPlayPref1',
            'dateOfPlayPref2',
            'slotOfPlayPref2',
            'dateOfPlayPref3',
            'slotOfPlayPref3',
            'comment:ntext',
            'bookingStatus',
            'cancellationDate',
            'confirm_GID',
            'confirm_date',
            'confirm_time',
            'VoucherApplied',
            'VoucherID',
            'VoucherNumber',
            'totAmount',
            'convFee',
            'currencyISO',
            'currencyIcon',
            'payStatus',
            'reminderEmail:email',
            'reminderSMS',
            'shortNoticeCancel',
            'noShowStatus',
            'noShowPenality',
            'noShowPaidStatus',
            'RecommedByGolflan',
            'GolflanRemarks',
            'reasonForCancel',
            'PaidByBookID_Split',
            'VisaCorrelationId',
            'OfferRedemAtVisa',
            'ReverseOfferRedemAtVisa',
        ],
    ]) ?>

</div>
