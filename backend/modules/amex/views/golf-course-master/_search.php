<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\GolfCourseMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="golf-course-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'GID') ?>

    <?= $form->field($model, 'golfCourseTypeID') ?>

    <?= $form->field($model, 'AMEXConciergeActive') ?>

    <?= $form->field($model, 'ISOSActive') ?>

    <?= $form->field($model, 'AMEXMasterTieUp') ?>

    <?php // echo $form->field($model, 'startTime') ?>

    <?php // echo $form->field($model, 'endTime') ?>

    <?php // echo $form->field($model, 'AMEXConciergeWeekdayRounds') ?>

    <?php // echo $form->field($model, 'AMEXConciergeWeekendRounds') ?>

    <?php // echo $form->field($model, 'ISOSWeekdayRounds') ?>

    <?php // echo $form->field($model, 'ISOSWeekendRounds') ?>

    <?php // echo $form->field($model, 'learnSessionDuration') ?>

    <?php // echo $form->field($model, 'learnInclusions') ?>

    <?php // echo $form->field($model, 'learnWeekdayPrice') ?>

    <?php // echo $form->field($model, 'learnWeekendPrice') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
