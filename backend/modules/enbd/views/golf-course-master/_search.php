<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\GolfCourseMasterSearch */
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

    <?= $form->field($model, 'GCName') ?>

    <?= $form->field($model, 'GCType') ?>

    <?= $form->field($model, 'min_price') ?>

    <?= $form->field($model, 'max_price') ?>

    <?php // echo $form->field($model, 'gc_weekday_rakrate') ?>

    <?php // echo $form->field($model, 'gc_weekend_rakrate') ?>

    <?php // echo $form->field($model, 'online_weekday_rakrate') ?>

    <?php // echo $form->field($model, 'online_weekend_rakrate') ?>

    <?php // echo $form->field($model, 'total_reviews') ?>

    <?php // echo $form->field($model, 'average_rating') ?>

    <?php // echo $form->field($model, 'Latitude') ?>

    <?php // echo $form->field($model, 'Longitude') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'City') ?>

    <?php // echo $form->field($model, 'Country') ?>

    <?php // echo $form->field($model, 'Continent') ?>

    <?php // echo $form->field($model, 'CountryISO') ?>

    <?php // echo $form->field($model, 'CountryISO2') ?>

    <?php // echo $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'TermsCondition') ?>

    <?php // echo $form->field($model, 'length') ?>

    <?php // echo $form->field($model, 'LogoURL') ?>

    <?php // echo $form->field($model, 'ImgURL') ?>

    <?php // echo $form->field($model, 'CurrencyISO') ?>

    <?php // echo $form->field($model, 'currencyIcon') ?>

    <?php // echo $form->field($model, 'HoleType') ?>

    <?php // echo $form->field($model, 'Par') ?>

    <?php // echo $form->field($model, 'Slope') ?>

    <?php // echo $form->field($model, 'other_info') ?>

    <?php // echo $form->field($model, 'GreenFeeRange') ?>

    <?php // echo $form->field($model, 'CompAvl') ?>

    <?php // echo $form->field($model, 'PaidAvl') ?>

    <?php // echo $form->field($model, 'clubBoolAvl') ?>

    <?php // echo $form->field($model, 'isOttoActive') ?>

    <?php // echo $form->field($model, 'ottoURL') ?>

    <?php // echo $form->field($model, 'CartAvl') ?>

    <?php // echo $form->field($model, 'CaddyAvl') ?>

    <?php // echo $form->field($model, 'ClubAvl') ?>

    <?php // echo $form->field($model, 'EqpRentalAvl') ?>

    <?php // echo $form->field($model, 'CoachingAvil') ?>

    <?php // echo $form->field($model, 'CoachingAvilPaid') ?>

    <?php // echo $form->field($model, 'FeatureRanking') ?>

    <?php // echo $form->field($model, 'isActive') ?>

    <?php // echo $form->field($model, 'paymntEngine') ?>

    <?php // echo $form->field($model, 'payPlayMinDays') ?>

    <?php // echo $form->field($model, 'compPlayMinDays') ?>

    <?php // echo $form->field($model, 'MaxHrsToCancel') ?>

    <?php // echo $form->field($model, 'rakActive') ?>

    <?php // echo $form->field($model, 'isHDFCActive') ?>

    <?php // echo $form->field($model, 'axisActive') ?>

    <?php // echo $form->field($model, 'mashreqActive') ?>

    <?php // echo $form->field($model, 'isSCBActive') ?>

    <?php // echo $form->field($model, 'MasterCardActive') ?>

    <?php // echo $form->field($model, 'IsYESActive') ?>

    <?php // echo $form->field($model, 'isSPHActive') ?>

    <?php // echo $form->field($model, 'isTeePassActive') ?>

    <?php // echo $form->field($model, 'enbdCompAvl') ?>

    <?php // echo $form->field($model, 'enbdPaidAvl') ?>

    <?php // echo $form->field($model, 'meta_title') ?>

    <?php // echo $form->field($model, 'meta_description') ?>

    <?php // echo $form->field($model, 'meta_keywords') ?>

    <?php // echo $form->field($model, 'TieUp') ?>

    <?php // echo $form->field($model, 'GolfLANDiscount') ?>

    <?php // echo $form->field($model, 'GL_RackRateWeekday') ?>

    <?php // echo $form->field($model, 'GL_RackRateWeekend') ?>

    <?php // echo $form->field($model, 'ClosedDays') ?>

    <?php // echo $form->field($model, 'ContactPerson') ?>

    <?php // echo $form->field($model, 'ContactNo1') ?>

    <?php // echo $form->field($model, 'ContactNo2') ?>

    <?php // echo $form->field($model, 'ContactPerEmail') ?>

    <?php // echo $form->field($model, 'PaymentMode') ?>

    <?php // echo $form->field($model, 'ContractValidFrom') ?>

    <?php // echo $form->field($model, 'ContractValidTill') ?>

    <?php // echo $form->field($model, 'OverNightStay') ?>

    <?php // echo $form->field($model, 'DrivingRange') ?>

    <?php // echo $form->field($model, 'YearStarted') ?>

    <?php // echo $form->field($model, 'CancellationPolicy') ?>

    <?php // echo $form->field($model, 'Designer') ?>

    <?php // echo $form->field($model, 'PriceIncludes') ?>

    <?php // echo $form->field($model, 'PriceIncludes2') ?>

    <?php // echo $form->field($model, 'PriceIncludes3') ?>

    <?php // echo $form->field($model, 'PriceIncludes4') ?>

    <?php // echo $form->field($model, 'PriceIncludes5') ?>

    <?php // echo $form->field($model, 'CourseType') ?>

    <?php // echo $form->field($model, 'cancelPolicy') ?>

    <?php // echo $form->field($model, 'GolfCoachingStatus') ?>

    <?php // echo $form->field($model, 'courseDesigner') ?>

    <?php // echo $form->field($model, 'hole_9_flag') ?>

    <?php // echo $form->field($model, 'hole_18_flag') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
