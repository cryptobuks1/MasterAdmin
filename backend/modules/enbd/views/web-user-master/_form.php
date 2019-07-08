<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\WebUserMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="web-user-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Login_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobileVerified')->textInput() ?>

    <?= $form->field($model, 'City')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ZipCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CardTypeID')->textInput() ?>

    <?= $form->field($model, 'CardNo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Emirates_card_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PasswordHash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RealPassword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HomeCourse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Handicap')->textInput() ?>

    <?= $form->field($model, 'DOB')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
