<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\WebUserCards */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="web-user-cards-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'User_ID')->textInput() ?>

    <?= $form->field($model, 'CardTypeID')->textInput() ?>

    <?= $form->field($model, 'CardNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CardName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ValidFrom')->textInput() ?>

    <?= $form->field($model, 'ValidTill')->textInput() ?>

    <?= $form->field($model, 'isDiscountAllowed')->textInput() ?>

    <?= $form->field($model, 'AvlCompGames')->textInput() ?>

    <?= $form->field($model, 'AvlLearnSessions')->textInput() ?>

    <?= $form->field($model, 'AvlAssistSessions')->textInput() ?>

    <?= $form->field($model, 'AvlGlobalSessions')->textInput() ?>

    <?= $form->field($model, 'AvlTrophyGames')->textInput() ?>

    <?= $form->field($model, 'AvlPNRGames')->textInput() ?>

    <?= $form->field($model, 'AvlTrophyPGames')->textInput() ?>

    <?= $form->field($model, 'isActive')->textInput() ?>

    <?= $form->field($model, 'isFlexiUser')->textInput() ?>

    <?= $form->field($model, 'DateAdded')->textInput() ?>

    <?= $form->field($model, 'ActivatedOn')->textInput() ?>

    <?= $form->field($model, 'RenewedOn')->textInput() ?>

    <?= $form->field($model, 'CountryOrigin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enbdVerified')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
