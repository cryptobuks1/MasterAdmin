<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\CountryList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iso_alpha2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iso_alpha3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iso_numeric')->textInput() ?>

    <?= $form->field($model, 'currency_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currency_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currrency_symbol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preferred_currrency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isActive')->textInput() ?>

    <?= $form->field($model, 'paymntEngine')->textInput() ?>

    <?= $form->field($model, 'isdCode')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
