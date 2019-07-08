<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\GolfCourseMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="golf-course-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'GCName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GCType')->textInput() ?>

    <?= $form->field($model, 'min_price')->textInput() ?>

    <?= $form->field($model, 'max_price')->textInput() ?>

    <?= $form->field($model, 'gc_weekday_rakrate')->textInput() ?>

    <?= $form->field($model, 'gc_weekend_rakrate')->textInput() ?>

    <?= $form->field($model, 'online_weekday_rakrate')->textInput() ?>

    <?= $form->field($model, 'online_weekend_rakrate')->textInput() ?>

    <?= $form->field($model, 'total_reviews')->textInput() ?>

    <?= $form->field($model, 'average_rating')->textInput() ?>

    <?= $form->field($model, 'Latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'City')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Country')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Continent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'CountryISO')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'CountryISO2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'TermsCondition')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'length')->textInput() ?>

    <?= $form->field($model, 'LogoURL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ImgURL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CurrencyISO')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'currencyIcon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HoleType')->textInput() ?>

    <?= $form->field($model, 'Par')->textInput() ?>

    <?= $form->field($model, 'Slope')->textInput() ?>

    <?= $form->field($model, 'other_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'GreenFeeRange')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CompAvl')->textInput() ?>

    <?= $form->field($model, 'PaidAvl')->textInput() ?>

    <?= $form->field($model, 'clubBoolAvl')->textInput() ?>

    <?= $form->field($model, 'isOttoActive')->textInput() ?>

    <?= $form->field($model, 'ottoURL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CartAvl')->textInput() ?>

    <?= $form->field($model, 'CaddyAvl')->textInput() ?>

    <?= $form->field($model, 'ClubAvl')->textInput() ?>

    <?= $form->field($model, 'EqpRentalAvl')->textInput() ?>

    <?= $form->field($model, 'CoachingAvil')->textInput() ?>

    <?= $form->field($model, 'CoachingAvilPaid')->textInput() ?>

    <?= $form->field($model, 'FeatureRanking')->textInput() ?>

    <?= $form->field($model, 'isActive')->textInput() ?>

    <?= $form->field($model, 'paymntEngine')->textInput() ?>

    <?= $form->field($model, 'payPlayMinDays')->textInput() ?>

    <?= $form->field($model, 'compPlayMinDays')->textInput() ?>

    <?= $form->field($model, 'MaxHrsToCancel')->textInput() ?>

    <?= $form->field($model, 'rakActive')->textInput() ?>

    <?= $form->field($model, 'isHDFCActive')->textInput() ?>

    <?= $form->field($model, 'axisActive')->textInput() ?>

    <?= $form->field($model, 'mashreqActive')->textInput() ?>

    <?= $form->field($model, 'isSCBActive')->textInput() ?>

    <?= $form->field($model, 'MasterCardActive')->textInput() ?>

    <?= $form->field($model, 'IsYESActive')->textInput() ?>

    <?= $form->field($model, 'isSPHActive')->textInput() ?>

    <?= $form->field($model, 'isTeePassActive')->textInput() ?>

    <?= $form->field($model, 'enbdCompAvl')->textInput() ?>

    <?= $form->field($model, 'enbdPaidAvl')->textInput() ?>

    <?= $form->field($model, 'meta_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_keywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'TieUp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GolfLANDiscount')->textInput() ?>

    <?= $form->field($model, 'GL_RackRateWeekday')->textInput() ?>

    <?= $form->field($model, 'GL_RackRateWeekend')->textInput() ?>

    <?= $form->field($model, 'ClosedDays')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ContactPerson')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ContactNo1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ContactNo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ContactPerEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PaymentMode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ContractValidFrom')->textInput() ?>

    <?= $form->field($model, 'ContractValidTill')->textInput() ?>

    <?= $form->field($model, 'OverNightStay')->textInput() ?>

    <?= $form->field($model, 'DrivingRange')->textInput() ?>

    <?= $form->field($model, 'YearStarted')->textInput() ?>

    <?= $form->field($model, 'CancellationPolicy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Designer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PriceIncludes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PriceIncludes2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PriceIncludes3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PriceIncludes4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PriceIncludes5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CourseType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cancelPolicy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GolfCoachingStatus')->textInput() ?>

    <?= $form->field($model, 'courseDesigner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hole_9_flag')->textInput() ?>

    <?= $form->field($model, 'hole_18_flag')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
