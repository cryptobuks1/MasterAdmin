<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\CountryListSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_countries') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'iso_alpha2') ?>

    <?= $form->field($model, 'iso_alpha3') ?>

    <?= $form->field($model, 'iso_numeric') ?>

    <?php // echo $form->field($model, 'currency_code') ?>

    <?php // echo $form->field($model, 'currency_name') ?>

    <?php // echo $form->field($model, 'currrency_symbol') ?>

    <?php // echo $form->field($model, 'preferred_currrency') ?>

    <?php // echo $form->field($model, 'flag') ?>

    <?php // echo $form->field($model, 'isActive') ?>

    <?php // echo $form->field($model, 'paymntEngine') ?>

    <?php // echo $form->field($model, 'isdCode') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
