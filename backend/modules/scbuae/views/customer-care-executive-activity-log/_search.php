<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\CustomerCareExecutiveActivityLogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-care-executive-activity-log-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'CustomerCareExecutiveActivityLogId') ?>

    <?= $form->field($model, 'CustomerCareExecutiveId') ?>

    <?= $form->field($model, 'LoginDateTime') ?>

    <?= $form->field($model, 'LogoutDateTime') ?>

    <?= $form->field($model, 'OperatingSystem') ?>

    <?php // echo $form->field($model, 'Browser') ?>

    <?php // echo $form->field($model, 'IP') ?>

    <?php // echo $form->field($model, 'IsActive') ?>

    <?php // echo $form->field($model, 'LastUpdated') ?>

    <?php // echo $form->field($model, 'CreatedOn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
