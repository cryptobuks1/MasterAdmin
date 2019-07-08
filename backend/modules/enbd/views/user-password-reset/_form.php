<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\UserPasswordReset */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-password-reset-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'resetkey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cdate')->textInput() ?>

    <?= $form->field($model, 'udate')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
