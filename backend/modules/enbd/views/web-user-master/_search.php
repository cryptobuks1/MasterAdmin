<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\WebUserMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="web-user-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'User_ID') ?>

    <?= $form->field($model, 'Login_Name') ?>

    <?= $form->field($model, 'Fname') ?>

    <?= $form->field($model, 'Lname') ?>

    <?= $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Mobile') ?>

    <?php // echo $form->field($model, 'mobileVerified') ?>

    <?php // echo $form->field($model, 'City') ?>

    <?php // echo $form->field($model, 'ZipCode') ?>

    <?php // echo $form->field($model, 'Country') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'Gender') ?>

    <?php // echo $form->field($model, 'CardTypeID') ?>

    <?php // echo $form->field($model, 'CardNo') ?>

    <?php // echo $form->field($model, 'Emirates_card_no') ?>

    <?php // echo $form->field($model, 'PasswordHash') ?>

    <?php // echo $form->field($model, 'Password') ?>

    <?php // echo $form->field($model, 'RealPassword') ?>

    <?php // echo $form->field($model, 'HomeCourse') ?>

    <?php // echo $form->field($model, 'Handicap') ?>

    <?php // echo $form->field($model, 'DOB') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
