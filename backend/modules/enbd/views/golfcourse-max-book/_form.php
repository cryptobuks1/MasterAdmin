<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\GolfcourseMaxBook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="golfcourse-max-book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'GID')->textInput() ?>

    <?= $form->field($model, 'MaxbookCount')->textInput() ?>

    <?= $form->field($model, 'Status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
