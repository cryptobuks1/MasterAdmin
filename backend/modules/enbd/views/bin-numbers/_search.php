<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\BinNumbersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bin-numbers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'bin_id') ?>

    <?= $form->field($model, 'bin_number') ?>

    <?= $form->field($model, 'comp_games') ?>

    <?= $form->field($model, 'isDiscountAllowed') ?>

    <?= $form->field($model, 'CardName') ?>

    <?php // echo $form->field($model, 'isFlexiUser') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
