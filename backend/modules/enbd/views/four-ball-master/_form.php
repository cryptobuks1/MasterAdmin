<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\FourBallMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="four-ball-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'BookID')->textInput() ?>

    <?= $form->field($model, 'fourBallName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fourBallEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fourBallPhoneNum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bookedByUserID')->textInput() ?>

    <?= $form->field($model, 'cdate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
