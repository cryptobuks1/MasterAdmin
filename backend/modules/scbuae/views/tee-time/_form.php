<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\TeeTime */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tee-time-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GolfCourseId')->textInput() ?>

    <?= $form->field($model, 'IsActive')->textInput() ?>

    <?= $form->field($model, 'LastUpdated')->textInput() ?>

    <?= $form->field($model, 'CreatedOn')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
