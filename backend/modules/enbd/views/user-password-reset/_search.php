<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\UserPasswordResetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-password-reset-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'upr_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'resetkey') ?>

    <?= $form->field($model, 'cdate') ?>

    <?= $form->field($model, 'udate') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
