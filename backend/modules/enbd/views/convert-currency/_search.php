<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\ConvertCurrencySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="convert-currency-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'currID') ?>

    <?= $form->field($model, 'CurrencyISO') ?>

    <?= $form->field($model, 'BaseCurrency') ?>

    <?= $form->field($model, 'Rate') ?>

    <?= $form->field($model, 'DateTimeUpdated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
