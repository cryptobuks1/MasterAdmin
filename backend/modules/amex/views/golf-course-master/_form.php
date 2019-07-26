<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\GolfCourseMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="golf-course-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'golfCourseTypeID')->textInput() ?>

    <?= $form->field($model, 'AMEXConciergeActive')->textInput() ?>

    <?= $form->field($model, 'ISOSActive')->textInput() ?>

    <?= $form->field($model, 'AMEXMasterTieUp')->textInput() ?>

    <?= $form->field($model, 'startTime')->textInput() ?>

    <?= $form->field($model, 'endTime')->textInput() ?>

    <?= $form->field($model, 'AMEXConciergeWeekdayRounds')->textInput() ?>

    <?= $form->field($model, 'AMEXConciergeWeekendRounds')->textInput() ?>

    <?= $form->field($model, 'ISOSWeekdayRounds')->textInput() ?>

    <?= $form->field($model, 'ISOSWeekendRounds')->textInput() ?>

    <?= $form->field($model, 'learnSessionDuration')->textInput() ?>

    <?= $form->field($model, 'learnInclusions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'learnWeekdayPrice')->textInput() ?>

    <?= $form->field($model, 'learnWeekendPrice')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
