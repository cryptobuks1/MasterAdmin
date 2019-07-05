<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\BookingStatusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-status-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'BookingStatusId') ?>

    <?= $form->field($model, 'Value') ?>

    <?= $form->field($model, 'IsActive') ?>

    <?= $form->field($model, 'LastUpdated') ?>

    <?= $form->field($model, 'CreatedOn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
