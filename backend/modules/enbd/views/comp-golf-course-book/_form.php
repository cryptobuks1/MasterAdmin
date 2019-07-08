<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\CompGolfCourseBook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comp-golf-course-book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'GID_OPT1')->textInput() ?>

    <?= $form->field($model, 'GID_OPT2')->textInput() ?>

    <?= $form->field($model, 'USER_ID')->textInput() ?>

    <?= $form->field($model, 'parent_book_id')->textInput() ?>

    <?= $form->field($model, 'additional_email')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'booking_type')->textInput() ?>

    <?= $form->field($model, 'CardNo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'enbdVerified')->textInput() ?>

    <?= $form->field($model, 'dateRequest')->textInput() ?>

    <?= $form->field($model, 'dateOfPlayPref1')->textInput() ?>

    <?= $form->field($model, 'slotOfPlayPref1')->textInput() ?>

    <?= $form->field($model, 'dateOfPlayPref2')->textInput() ?>

    <?= $form->field($model, 'slotOfPlayPref2')->textInput() ?>

    <?= $form->field($model, 'dateOfPlayPref3')->textInput() ?>

    <?= $form->field($model, 'slotOfPlayPref3')->textInput() ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bookingStatus')->textInput() ?>

    <?= $form->field($model, 'cancellationDate')->textInput() ?>

    <?= $form->field($model, 'confirm_GID')->textInput() ?>

    <?= $form->field($model, 'confirm_date')->textInput() ?>

    <?= $form->field($model, 'confirm_time')->textInput() ?>

    <?= $form->field($model, 'VoucherApplied')->textInput() ?>

    <?= $form->field($model, 'VoucherID')->textInput() ?>

    <?= $form->field($model, 'VoucherNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'totAmount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'convFee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currencyISO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currencyIcon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reminderEmail')->textInput() ?>

    <?= $form->field($model, 'reminderSMS')->textInput() ?>

    <?= $form->field($model, 'shortNoticeCancel')->textInput() ?>

    <?= $form->field($model, 'noShowStatus')->textInput() ?>

    <?= $form->field($model, 'noShowPenality')->textInput() ?>

    <?= $form->field($model, 'noShowPaidStatus')->textInput() ?>

    <?= $form->field($model, 'RecommedByGolflan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GolflanRemarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reasonForCancel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PaidByBookID_Split')->textInput() ?>

    <?= $form->field($model, 'VisaCorrelationId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OfferRedemAtVisa')->textInput() ?>

    <?= $form->field($model, 'ReverseOfferRedemAtVisa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
