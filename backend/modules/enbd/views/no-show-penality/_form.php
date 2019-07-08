<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\NoShowPenality */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="no-show-penality-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'penalityAmount')->textInput() ?>

    <?= $form->field($model, 'bookingIDS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payStatus')->textInput() ?>

    <?= $form->field($model, 'insertDateTime')->textInput() ?>

    <?= $form->field($model, 'updateDateTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
