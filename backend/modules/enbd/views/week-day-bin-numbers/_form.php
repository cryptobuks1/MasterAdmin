<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\WeekDayBinNumbers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="week-day-bin-numbers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'BinNumber')->textInput() ?>

    <?= $form->field($model, 'IsActive')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
