<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CustomerCareExecutiveId')->textInput() ?>

    <?= $form->field($model, 'GolferId')->textInput() ?>

    <?= $form->field($model, 'GolfCourseId')->textInput() ?>

    <?= $form->field($model, 'TeeTimeId')->textInput() ?>

    <?= $form->field($model, 'ConfirmTeeTime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DateOfPlay')->textInput() ?>

    <?= $form->field($model, 'DateOfRequest')->textInput() ?>

    <?= $form->field($model, 'NoOfGuest')->textInput() ?>

    <?= $form->field($model, 'GuestPaymentId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Guest1Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Guest1Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Guest1Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Guest1Mobile')->textInput() ?>

    <?= $form->field($model, 'Guest1Handicap')->textInput() ?>

    <?= $form->field($model, 'Guest1MembershipNumber')->textInput() ?>

    <?= $form->field($model, 'Guest2Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Guest2Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Guest2Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Guest2Mobile')->textInput() ?>

    <?= $form->field($model, 'Guest2Handicap')->textInput() ?>

    <?= $form->field($model, 'Guest2MembershipNumber')->textInput() ?>

    <?= $form->field($model, 'Guest3Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Guest3Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Guest3Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Guest3Mobile')->textInput() ?>

    <?= $form->field($model, 'Guest3Handicap')->textInput() ?>

    <?= $form->field($model, 'Guest3MembershipNumber')->textInput() ?>

    <?= $form->field($model, 'PaymentMethod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PaymentMethodComment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BookingStatusId')->textInput() ?>

    <?= $form->field($model, 'OutOfTATStatus')->textInput() ?>

    <?= $form->field($model, 'Comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IsActive')->textInput() ?>

    <?= $form->field($model, 'LastUpdated')->textInput() ?>

    <?= $form->field($model, 'CreatedOn')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
