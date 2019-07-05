<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\CustomerCareExecutiveActivityLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-care-executive-activity-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CustomerCareExecutiveId')->textInput() ?>

    <?= $form->field($model, 'LoginDateTime')->textInput() ?>

    <?= $form->field($model, 'LogoutDateTime')->textInput() ?>

    <?= $form->field($model, 'OperatingSystem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Browser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IsActive')->textInput() ?>

    <?= $form->field($model, 'LastUpdated')->textInput() ?>

    <?= $form->field($model, 'CreatedOn')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
