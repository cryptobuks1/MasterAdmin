<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\CardHolder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-holder-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Handicap')->textInput() ?>

    <?= $form->field($model, 'CardTypeID')->textInput() ?>

    <?= $form->field($model, 'HolderTypeID')->textInput() ?>

    <?= $form->field($model, 'SupplementaryMobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SupplementaryName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SupplementaryHandicap')->textInput() ?>

    <?= $form->field($model, 'IsActive')->textInput() ?>

    <?= $form->field($model, 'CreatedOn')->textInput() ?>

    <?= $form->field($model, 'LastUpdated')->textInput() ?>

    <?= $form->field($model, 'CreatedBy')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
