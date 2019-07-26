<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\CardHolder */
/* @var $form ActiveForm */
?>
<div class="new-booking">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customerID')->textInput() ?>
    <?= $form->field($model, 'new_password')->textInput() ?>
    <?= $form->field($model, 'birth_date', ['selectors' => ['input' => '#myBirthDate']])->textInput(['id' => 'myBirthDate']) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- new-booking -->