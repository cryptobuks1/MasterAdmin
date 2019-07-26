<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\BookingMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'bookingID') ?>

    <?= $form->field($model, 'GID') ?>

    <?= $form->field($model, 'dateOfPlay') ?>

    <?= $form->field($model, 'dateOfBooking') ?>

    <?= $form->field($model, 'preferredTimeOfPlay') ?>

    <?php // echo $form->field($model, 'timeOfPlay1') ?>

    <?php // echo $form->field($model, 'timeOfPlay2') ?>

    <?php // echo $form->field($model, 'confirmedTimeOfPlay') ?>

    <?php // echo $form->field($model, 'numOfGolfers') ?>

    <?php // echo $form->field($model, 'customerID') ?>

    <?php // echo $form->field($model, 'bookingStatus') ?>

    <?php // echo $form->field($model, 'ConfirmDateTime') ?>

    <?php // echo $form->field($model, 'isEscalated') ?>

    <?php // echo $form->field($model, 'outOfTAT') ?>

    <?php // echo $form->field($model, 'cancellationReasonID') ?>

    <?php // echo $form->field($model, 'cancellationReason') ?>

    <?php // echo $form->field($model, 'referenceNum') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'conciergeRemarks') ?>

    <?php // echo $form->field($model, 'isosRemarks') ?>

    <?php // echo $form->field($model, 'golflanRemarks') ?>

    <?php // echo $form->field($model, 'masterRemarks') ?>

    <?php // echo $form->field($model, 'isActive') ?>

    <?php // echo $form->field($model, 'createdOn') ?>

    <?php // echo $form->field($model, 'lastUpdated') ?>

    <?php // echo $form->field($model, 'createdBy') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
