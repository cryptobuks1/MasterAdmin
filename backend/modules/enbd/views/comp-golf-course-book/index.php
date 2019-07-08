<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\enbd\models\CompGolfCourseBookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comp Golf Course Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comp-golf-course-book-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Comp Golf Course Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'GID_OPT1',
            'GID_OPT2',
            'BookID',
            'USER_ID',
            'parent_book_id',
            //'additional_email:ntext',
            //'booking_type',
            //'CardNo:ntext',
            //'enbdVerified',
            //'dateRequest',
            //'dateOfPlayPref1',
            //'slotOfPlayPref1',
            //'dateOfPlayPref2',
            //'slotOfPlayPref2',
            //'dateOfPlayPref3',
            //'slotOfPlayPref3',
            //'comment:ntext',
            //'bookingStatus',
            //'cancellationDate',
            //'confirm_GID',
            //'confirm_date',
            //'confirm_time',
            //'VoucherApplied',
            //'VoucherID',
            //'VoucherNumber',
            //'totAmount',
            //'convFee',
            //'currencyISO',
            //'currencyIcon',
            //'payStatus',
            //'reminderEmail:email',
            //'reminderSMS',
            //'shortNoticeCancel',
            //'noShowStatus',
            //'noShowPenality',
            //'noShowPaidStatus',
            //'RecommedByGolflan',
            //'GolflanRemarks',
            //'reasonForCancel',
            //'PaidByBookID_Split',
            //'VisaCorrelationId',
            //'OfferRedemAtVisa',
            //'ReverseOfferRedemAtVisa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
