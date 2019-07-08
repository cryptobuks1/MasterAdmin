<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\OneTimePasswordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="one-time-password-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'OtpID') ?>

    <?= $form->field($model, 'UserID') ?>

    <?= $form->field($model, 'OTP') ?>

    <?= $form->field($model, 'MID') ?>

    <?= $form->field($model, 'isActive') ?>

    <?php // echo $form->field($model, 'CTime') ?>

    <?php // echo $form->field($model, 'ETime') ?>

    <?php // echo $form->field($model, 'Times') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
