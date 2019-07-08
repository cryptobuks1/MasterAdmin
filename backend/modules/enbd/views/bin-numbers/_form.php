<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\BinNumbers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bin-numbers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bin_number')->textInput() ?>

    <?= $form->field($model, 'comp_games')->textInput() ?>

    <?= $form->field($model, 'isDiscountAllowed')->textInput() ?>

    <?= $form->field($model, 'CardName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isFlexiUser')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
