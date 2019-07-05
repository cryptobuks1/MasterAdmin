<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\GuestPaymentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guest-payment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'GuestPaymentId') ?>

    <?= $form->field($model, 'PaymentGatewayOrderId') ?>

    <?= $form->field($model, 'Amount') ?>

    <?= $form->field($model, 'CurrencyCode') ?>

    <?= $form->field($model, 'PaymentDate') ?>

    <?php // echo $form->field($model, 'CustomerCareExecutiveId') ?>

    <?php // echo $form->field($model, 'GuestPaymentStatusId') ?>

    <?php // echo $form->field($model, 'IsActive') ?>

    <?php // echo $form->field($model, 'LastUpdated') ?>

    <?php // echo $form->field($model, 'CreatedOn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
