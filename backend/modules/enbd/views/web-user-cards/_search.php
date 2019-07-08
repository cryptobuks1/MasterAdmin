<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\WebUserCardsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="web-user-cards-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'User_ID') ?>

    <?= $form->field($model, 'CardTypeID') ?>

    <?= $form->field($model, 'CardNo') ?>

    <?= $form->field($model, 'CardName') ?>

    <?php // echo $form->field($model, 'ValidFrom') ?>

    <?php // echo $form->field($model, 'ValidTill') ?>

    <?php // echo $form->field($model, 'isDiscountAllowed') ?>

    <?php // echo $form->field($model, 'AvlCompGames') ?>

    <?php // echo $form->field($model, 'AvlLearnSessions') ?>

    <?php // echo $form->field($model, 'AvlAssistSessions') ?>

    <?php // echo $form->field($model, 'AvlGlobalSessions') ?>

    <?php // echo $form->field($model, 'AvlTrophyGames') ?>

    <?php // echo $form->field($model, 'AvlPNRGames') ?>

    <?php // echo $form->field($model, 'AvlTrophyPGames') ?>

    <?php // echo $form->field($model, 'isActive') ?>

    <?php // echo $form->field($model, 'isFlexiUser') ?>

    <?php // echo $form->field($model, 'DateAdded') ?>

    <?php // echo $form->field($model, 'ActivatedOn') ?>

    <?php // echo $form->field($model, 'RenewedOn') ?>

    <?php // echo $form->field($model, 'CountryOrigin') ?>

    <?php // echo $form->field($model, 'enbdVerified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
