<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\NoShowPenalitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="no-show-penality-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'penalityID') ?>

    <?= $form->field($model, 'penalityAmount') ?>

    <?= $form->field($model, 'bookingIDS') ?>

    <?= $form->field($model, 'payStatus') ?>

    <?= $form->field($model, 'insertDateTime') ?>

    <?php // echo $form->field($model, 'updateDateTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
