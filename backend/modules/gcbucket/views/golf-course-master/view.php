<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\gcbucket\models\GolfCourseMaster */

$this->title = $model->GID;
$this->params['breadcrumbs'][] = ['label' => 'Golf Course Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="golf-course-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->GID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->GID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'GID',
            'GCName',
            'GCType',
            'min_price',
            'max_price',
            'gc_weekday_rakrate',
            'gc_weekend_rakrate',
            'online_weekday_rakrate',
            'online_weekend_rakrate',
            'total_reviews',
            'average_rating',
            'Latitude',
            'Longitude',
            'Address',
            'City',
            'Country:ntext',
            'Continent:ntext',
            'CountryISO:ntext',
            'CountryISO2:ntext',
            'Description:ntext',
            'TermsCondition:ntext',
            'length',
            'LogoURL',
            'ImgURL',
            'CurrencyISO:ntext',
            'currencyIcon',
            'HoleType',
            'Par',
            'Slope',
            'other_info:ntext',
            'GreenFeeRange',
            'CompAvl',
            'PaidAvl',
            'clubBoolAvl',
            'isOttoActive',
            'ottoURL',
            'CartAvl',
            'CaddyAvl',
            'ClubAvl',
            'EqpRentalAvl',
            'CoachingAvil',
            'CoachingAvilPaid',
            'FeatureRanking',
            'isActive',
            'paymntEngine',
            'payPlayMinDays',
            'compPlayMinDays',
            'MaxHrsToCancel',
            'rakActive',
            'isHDFCActive',
            'isIsosAxisActive',
            'axisActive',
            'mashreqActive',
            'isSCBActive',
            'MasterCardActive',
            'IsYESActive',
            'isSPHActive',
            'isTeePassActive',
            'isAmexActive',
            'enbdCompAvl',
            'enbdPaidAvl',
            'meta_title:ntext',
            'meta_description:ntext',
            'meta_keywords:ntext',
            'TieUp',
            'GolfLANDiscount',
            'GL_RackRateWeekday',
            'GL_RackRateWeekend',
            'ClosedDays',
            'ContactPerson',
            'ContactNo1',
            'ContactNo2',
            'ContactPerEmail:email',
            'PaymentMode',
            'ContractValidFrom',
            'ContractValidTill',
            'OverNightStay',
            'DrivingRange',
            'YearStarted',
            'CancellationPolicy',
            'Designer',
            'PriceIncludes',
            'PriceIncludes2',
            'PriceIncludes3',
            'PriceIncludes4',
            'PriceIncludes5',
            'CourseType',
            'cancelPolicy',
            'GolfCoachingStatus',
            'courseDesigner',
            'hole_9_flag',
            'hole_18_flag',
            'CreatedOn',
        ],
    ]) ?>

</div>
