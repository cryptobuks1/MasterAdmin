<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\gcbucket\models\GolfCourseMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Golf Course Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golf-course-master-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Golf Course Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'GID',
            'GCName',
            'GCType',
            'min_price',
            'max_price',
            //'gc_weekday_rakrate',
            //'gc_weekend_rakrate',
            //'online_weekday_rakrate',
            //'online_weekend_rakrate',
            //'total_reviews',
            //'average_rating',
            //'Latitude',
            //'Longitude',
            //'Address',
            //'City',
            //'Country:ntext',
            //'Continent:ntext',
            //'CountryISO:ntext',
            //'CountryISO2:ntext',
            //'Description:ntext',
            //'TermsCondition:ntext',
            //'length',
            //'LogoURL',
            //'ImgURL',
            //'CurrencyISO:ntext',
            //'currencyIcon',
            //'HoleType',
            //'Par',
            //'Slope',
            //'other_info:ntext',
            //'GreenFeeRange',
            //'CompAvl',
            //'PaidAvl',
            //'clubBoolAvl',
            //'isOttoActive',
            //'ottoURL',
            //'CartAvl',
            //'CaddyAvl',
            //'ClubAvl',
            //'EqpRentalAvl',
            //'CoachingAvil',
            //'CoachingAvilPaid',
            //'FeatureRanking',
            //'isActive',
            //'paymntEngine',
            //'payPlayMinDays',
            //'compPlayMinDays',
            //'MaxHrsToCancel',
            //'rakActive',
            //'isHDFCActive',
            //'isIsosAxisActive',
            //'axisActive',
            //'mashreqActive',
            //'isSCBActive',
            //'MasterCardActive',
            //'IsYESActive',
            //'isSPHActive',
            //'isTeePassActive',
            //'isAmexActive',
            //'enbdCompAvl',
            //'enbdPaidAvl',
            //'meta_title:ntext',
            //'meta_description:ntext',
            //'meta_keywords:ntext',
            //'TieUp',
            //'GolfLANDiscount',
            //'GL_RackRateWeekday',
            //'GL_RackRateWeekend',
            //'ClosedDays',
            //'ContactPerson',
            //'ContactNo1',
            //'ContactNo2',
            //'ContactPerEmail:email',
            //'PaymentMode',
            //'ContractValidFrom',
            //'ContractValidTill',
            //'OverNightStay',
            //'DrivingRange',
            //'YearStarted',
            //'CancellationPolicy',
            //'Designer',
            //'PriceIncludes',
            //'PriceIncludes2',
            //'PriceIncludes3',
            //'PriceIncludes4',
            //'PriceIncludes5',
            //'CourseType',
            //'cancelPolicy',
            //'GolfCoachingStatus',
            //'courseDesigner',
            //'hole_9_flag',
            //'hole_18_flag',
            //'CreatedOn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
