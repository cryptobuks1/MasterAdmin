<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\PaypalLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paypal-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'txn_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'log')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'posted_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
