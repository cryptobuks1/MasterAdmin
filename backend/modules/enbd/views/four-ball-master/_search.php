<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\FourBallMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="four-ball-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'fourBallID') ?>

    <?= $form->field($model, 'BookID') ?>

    <?= $form->field($model, 'fourBallName') ?>

    <?= $form->field($model, 'fourBallEmail') ?>

    <?= $form->field($model, 'fourBallPhoneNum') ?>

    <?php // echo $form->field($model, 'bookedByUserID') ?>

    <?php // echo $form->field($model, 'cdate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
