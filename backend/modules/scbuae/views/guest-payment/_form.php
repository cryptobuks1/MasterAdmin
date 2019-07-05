<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\GuestPayment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guest-payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PaymentGatewayOrderId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CurrencyCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PaymentDate')->textInput() ?>

    <?= $form->field($model, 'CustomerCareExecutiveId')->textInput() ?>

    <?= $form->field($model, 'GuestPaymentStatusId')->textInput() ?>

    <?= $form->field($model, 'IsActive')->textInput() ?>

    <?= $form->field($model, 'LastUpdated')->textInput() ?>

    <?= $form->field($model, 'CreatedOn')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
