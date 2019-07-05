<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\BookingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'BookingId') ?>

    <?= $form->field($model, 'CustomerCareExecutiveId') ?>

    <?= $form->field($model, 'GolferId') ?>

    <?= $form->field($model, 'GolfCourseId') ?>

    <?= $form->field($model, 'TeeTimeId') ?>

    <?php // echo $form->field($model, 'ConfirmTeeTime') ?>

    <?php // echo $form->field($model, 'DateOfPlay') ?>

    <?php // echo $form->field($model, 'DateOfRequest') ?>

    <?php // echo $form->field($model, 'NoOfGuest') ?>

    <?php // echo $form->field($model, 'GuestPaymentId') ?>

    <?php // echo $form->field($model, 'Guest1Type') ?>

    <?php // echo $form->field($model, 'Guest1Name') ?>

    <?php // echo $form->field($model, 'Guest1Email') ?>

    <?php // echo $form->field($model, 'Guest1Mobile') ?>

    <?php // echo $form->field($model, 'Guest1Handicap') ?>

    <?php // echo $form->field($model, 'Guest1MembershipNumber') ?>

    <?php // echo $form->field($model, 'Guest2Type') ?>

    <?php // echo $form->field($model, 'Guest2Name') ?>

    <?php // echo $form->field($model, 'Guest2Email') ?>

    <?php // echo $form->field($model, 'Guest2Mobile') ?>

    <?php // echo $form->field($model, 'Guest2Handicap') ?>

    <?php // echo $form->field($model, 'Guest2MembershipNumber') ?>

    <?php // echo $form->field($model, 'Guest3Type') ?>

    <?php // echo $form->field($model, 'Guest3Name') ?>

    <?php // echo $form->field($model, 'Guest3Email') ?>

    <?php // echo $form->field($model, 'Guest3Mobile') ?>

    <?php // echo $form->field($model, 'Guest3Handicap') ?>

    <?php // echo $form->field($model, 'Guest3MembershipNumber') ?>

    <?php // echo $form->field($model, 'PaymentMethod') ?>

    <?php // echo $form->field($model, 'PaymentMethodComment') ?>

    <?php // echo $form->field($model, 'BookingStatusId') ?>

    <?php // echo $form->field($model, 'OutOfTATStatus') ?>

    <?php // echo $form->field($model, 'Comment') ?>

    <?php // echo $form->field($model, 'IsActive') ?>

    <?php // echo $form->field($model, 'LastUpdated') ?>

    <?php // echo $form->field($model, 'CreatedOn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
