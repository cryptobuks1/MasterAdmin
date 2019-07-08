<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\CompGolfCourseBookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comp-golf-course-book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'GID_OPT1') ?>

    <?= $form->field($model, 'GID_OPT2') ?>

    <?= $form->field($model, 'BookID') ?>

    <?= $form->field($model, 'USER_ID') ?>

    <?= $form->field($model, 'parent_book_id') ?>

    <?php // echo $form->field($model, 'additional_email') ?>

    <?php // echo $form->field($model, 'booking_type') ?>

    <?php // echo $form->field($model, 'CardNo') ?>

    <?php // echo $form->field($model, 'enbdVerified') ?>

    <?php // echo $form->field($model, 'dateRequest') ?>

    <?php // echo $form->field($model, 'dateOfPlayPref1') ?>

    <?php // echo $form->field($model, 'slotOfPlayPref1') ?>

    <?php // echo $form->field($model, 'dateOfPlayPref2') ?>

    <?php // echo $form->field($model, 'slotOfPlayPref2') ?>

    <?php // echo $form->field($model, 'dateOfPlayPref3') ?>

    <?php // echo $form->field($model, 'slotOfPlayPref3') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'bookingStatus') ?>

    <?php // echo $form->field($model, 'cancellationDate') ?>

    <?php // echo $form->field($model, 'confirm_GID') ?>

    <?php // echo $form->field($model, 'confirm_date') ?>

    <?php // echo $form->field($model, 'confirm_time') ?>

    <?php // echo $form->field($model, 'VoucherApplied') ?>

    <?php // echo $form->field($model, 'VoucherID') ?>

    <?php // echo $form->field($model, 'VoucherNumber') ?>

    <?php // echo $form->field($model, 'totAmount') ?>

    <?php // echo $form->field($model, 'convFee') ?>

    <?php // echo $form->field($model, 'currencyISO') ?>

    <?php // echo $form->field($model, 'currencyIcon') ?>

    <?php // echo $form->field($model, 'payStatus') ?>

    <?php // echo $form->field($model, 'reminderEmail') ?>

    <?php // echo $form->field($model, 'reminderSMS') ?>

    <?php // echo $form->field($model, 'shortNoticeCancel') ?>

    <?php // echo $form->field($model, 'noShowStatus') ?>

    <?php // echo $form->field($model, 'noShowPenality') ?>

    <?php // echo $form->field($model, 'noShowPaidStatus') ?>

    <?php // echo $form->field($model, 'RecommedByGolflan') ?>

    <?php // echo $form->field($model, 'GolflanRemarks') ?>

    <?php // echo $form->field($model, 'reasonForCancel') ?>

    <?php // echo $form->field($model, 'PaidByBookID_Split') ?>

    <?php // echo $form->field($model, 'VisaCorrelationId') ?>

    <?php // echo $form->field($model, 'OfferRedemAtVisa') ?>

    <?php // echo $form->field($model, 'ReverseOfferRedemAtVisa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
