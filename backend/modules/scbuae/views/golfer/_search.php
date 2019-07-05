<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\GolferSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="golfer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'GolferId') ?>

    <?= $form->field($model, 'FirstName') ?>

    <?= $form->field($model, 'LastName') ?>

    <?= $form->field($model, 'DateOfBirth') ?>

    <?= $form->field($model, 'Handicap') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'passwordHash') ?>

    <?php // echo $form->field($model, 'Mobile') ?>

    <?php // echo $form->field($model, 'Last8Digits') ?>

    <?php // echo $form->field($model, 'IsActive') ?>

    <?php // echo $form->field($model, 'LastUpdated') ?>

    <?php // echo $form->field($model, 'CreatedOn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
