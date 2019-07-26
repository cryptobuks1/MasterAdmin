<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\CardHolderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-holder-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'CardHolderID') ?>

    <?= $form->field($model, 'Mobile') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Handicap') ?>

    <?= $form->field($model, 'CardTypeID') ?>

    <?php // echo $form->field($model, 'HolderTypeID') ?>

    <?php // echo $form->field($model, 'SupplementaryMobile') ?>

    <?php // echo $form->field($model, 'SupplementaryName') ?>

    <?php // echo $form->field($model, 'SupplementaryHandicap') ?>

    <?php // echo $form->field($model, 'IsActive') ?>

    <?php // echo $form->field($model, 'CreatedOn') ?>

    <?php // echo $form->field($model, 'LastUpdated') ?>

    <?php // echo $form->field($model, 'CreatedBy') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
