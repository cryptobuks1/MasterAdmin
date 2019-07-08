<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\OneTimePassword */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="one-time-password-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UserID')->textInput() ?>

    <?= $form->field($model, 'OTP')->textInput() ?>

    <?= $form->field($model, 'MID')->textInput() ?>

    <?= $form->field($model, 'isActive')->textInput() ?>

    <?= $form->field($model, 'CTime')->textInput() ?>

    <?= $form->field($model, 'ETime')->textInput() ?>

    <?= $form->field($model, 'Times')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
