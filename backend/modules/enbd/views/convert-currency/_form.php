<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\ConvertCurrency */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="convert-currency-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CurrencyISO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BaseCurrency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DateTimeUpdated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
