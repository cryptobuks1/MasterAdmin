<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "golfCourseMaster".
 *
 * @property int $GID
 * @property string $GCName
 * @property int $GCType 0 - Premium 1 - Trophy
 * @property double $min_price
 * @property double $max_price
 * @property double $gc_weekday_rakrate
 * @property double $gc_weekend_rakrate
 * @property double $online_weekday_rakrate
 * @property double $online_weekend_rakrate
 * @property int $total_reviews
 * @property double $average_rating
 * @property string $Latitude
 * @property string $Longitude
 * @property string $Address
 * @property string $City
 * @property string $Country
 * @property string $Continent
 * @property string $CountryISO
 * @property string $CountryISO2
 * @property string $Description
 * @property string $TermsCondition
 * @property double $length
 * @property string $LogoURL
 * @property string $ImgURL
 * @property string $CurrencyISO
 * @property string $currencyIcon
 * @property int $HoleType
 * @property int $Par
 * @property double $Slope
 * @property string $other_info
 * @property string $GreenFeeRange
 * @property int $CompAvl
 * @property int $PaidAvl
 * @property int $clubBoolAvl
 * @property int $isOttoActive Is Otto Active for this GC 0 - False 1 - True
 * @property string $ottoURL URL for Otto website
 * @property int $CartAvl
 * @property int $CaddyAvl
 * @property int $ClubAvl
 * @property int $EqpRentalAvl
 * @property int $CoachingAvil
 * @property int $CoachingAvilPaid
 * @property int $FeatureRanking
 * @property int $isActive
 * @property int $paymntEngine 0 for CCAvenue and 1 for PayPal
 * @property int $payPlayMinDays
 * @property int $compPlayMinDays
 * @property int $MaxHrsToCancel
 * @property int $rakActive
 * @property int $isHDFCActive
 * @property int $axisActive
 * @property int $mashreqActive
 * @property int $isSCBActive
 * @property int $MasterCardActive
 * @property int $IsYESActive
 * @property int $isSPHActive
 * @property int $isTeePassActive
 * @property int $enbdCompAvl
 * @property int $enbdPaidAvl
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $TieUp
 * @property int $GolfLANDiscount 0: NO, 1: Yes
 * @property int $GL_RackRateWeekday
 * @property int $GL_RackRateWeekend
 * @property string $ClosedDays
 * @property string $ContactPerson
 * @property string $ContactNo1
 * @property string $ContactNo2
 * @property string $ContactPerEmail
 * @property string $PaymentMode
 * @property string $ContractValidFrom
 * @property string $ContractValidTill
 * @property int $OverNightStay
 * @property int $DrivingRange
 * @property string $YearStarted
 * @property string $CancellationPolicy
 * @property string $Designer
 * @property string $PriceIncludes
 * @property string $PriceIncludes2
 * @property string $PriceIncludes3
 * @property string $PriceIncludes4
 * @property string $PriceIncludes5
 * @property string $CourseType
 * @property string $cancelPolicy
 * @property int $GolfCoachingStatus
 * @property string $courseDesigner
 * @property int $hole_9_flag
 * @property int $hole_18_flag
 */
class GolfCourseMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golfCourseMaster';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('enbdDB');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GCType', 'total_reviews', 'HoleType', 'Par', 'CompAvl', 'PaidAvl', 'clubBoolAvl', 'isOttoActive', 'CartAvl', 'CaddyAvl', 'ClubAvl', 'EqpRentalAvl', 'CoachingAvil', 'CoachingAvilPaid', 'FeatureRanking', 'isActive', 'paymntEngine', 'payPlayMinDays', 'compPlayMinDays', 'MaxHrsToCancel', 'rakActive', 'isHDFCActive', 'axisActive', 'mashreqActive', 'isSCBActive', 'MasterCardActive', 'IsYESActive', 'isSPHActive', 'isTeePassActive', 'enbdCompAvl', 'enbdPaidAvl', 'GolfLANDiscount', 'GL_RackRateWeekday', 'GL_RackRateWeekend', 'OverNightStay', 'DrivingRange', 'GolfCoachingStatus', 'hole_9_flag', 'hole_18_flag'], 'integer'],
            [['min_price', 'max_price', 'gc_weekday_rakrate', 'gc_weekend_rakrate', 'online_weekday_rakrate', 'online_weekend_rakrate', 'average_rating', 'Latitude', 'Longitude', 'length', 'Slope'], 'number'],
            [['total_reviews', 'average_rating', 'CurrencyISO', 'rakActive', 'meta_title', 'meta_description', 'meta_keywords', 'TieUp', 'ClosedDays', 'ContactPerson', 'PaymentMode', 'ContractValidFrom', 'ContractValidTill', 'YearStarted', 'Designer', 'PriceIncludes', 'CourseType'], 'required'],
            [['Country', 'Continent', 'CountryISO', 'CountryISO2', 'Description', 'TermsCondition', 'CurrencyISO', 'other_info', 'meta_title', 'meta_description', 'meta_keywords'], 'string'],
            [['ContractValidFrom', 'ContractValidTill', 'YearStarted'], 'safe'],
            [['GCName', 'Address', 'City', 'LogoURL', 'ImgURL', 'cancelPolicy'], 'string', 'max' => 255],
            [['currencyIcon'], 'string', 'max' => 10],
            [['GreenFeeRange'], 'string', 'max' => 45],
            [['ottoURL'], 'string', 'max' => 100],
            [['TieUp', 'ClosedDays', 'ContactPerson', 'ContactNo1', 'ContactNo2', 'ContactPerEmail', 'PaymentMode', 'Designer', 'PriceIncludes', 'PriceIncludes2', 'PriceIncludes3', 'PriceIncludes4', 'PriceIncludes5', 'CourseType', 'courseDesigner'], 'string', 'max' => 200],
            [['CancellationPolicy'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GID' => 'Gid',
            'GCName' => 'Gc Name',
            'GCType' => 'Gc Type',
            'min_price' => 'Min Price',
            'max_price' => 'Max Price',
            'gc_weekday_rakrate' => 'Gc Weekday Rakrate',
            'gc_weekend_rakrate' => 'Gc Weekend Rakrate',
            'online_weekday_rakrate' => 'Online Weekday Rakrate',
            'online_weekend_rakrate' => 'Online Weekend Rakrate',
            'total_reviews' => 'Total Reviews',
            'average_rating' => 'Average Rating',
            'Latitude' => 'Latitude',
            'Longitude' => 'Longitude',
            'Address' => 'Address',
            'City' => 'City',
            'Country' => 'Country',
            'Continent' => 'Continent',
            'CountryISO' => 'Country Iso',
            'CountryISO2' => 'Country Iso2',
            'Description' => 'Description',
            'TermsCondition' => 'Terms Condition',
            'length' => 'Length',
            'LogoURL' => 'Logo Url',
            'ImgURL' => 'Img Url',
            'CurrencyISO' => 'Currency Iso',
            'currencyIcon' => 'Currency Icon',
            'HoleType' => 'Hole Type',
            'Par' => 'Par',
            'Slope' => 'Slope',
            'other_info' => 'Other Info',
            'GreenFeeRange' => 'Green Fee Range',
            'CompAvl' => 'Comp Avl',
            'PaidAvl' => 'Paid Avl',
            'clubBoolAvl' => 'Club Bool Avl',
            'isOttoActive' => 'Is Otto Active',
            'ottoURL' => 'Otto Url',
            'CartAvl' => 'Cart Avl',
            'CaddyAvl' => 'Caddy Avl',
            'ClubAvl' => 'Club Avl',
            'EqpRentalAvl' => 'Eqp Rental Avl',
            'CoachingAvil' => 'Coaching Avil',
            'CoachingAvilPaid' => 'Coaching Avil Paid',
            'FeatureRanking' => 'Feature Ranking',
            'isActive' => 'Is Active',
            'paymntEngine' => 'Paymnt Engine',
            'payPlayMinDays' => 'Pay Play Min Days',
            'compPlayMinDays' => 'Comp Play Min Days',
            'MaxHrsToCancel' => 'Max Hrs To Cancel',
            'rakActive' => 'Rak Active',
            'isHDFCActive' => 'Is Hdfc Active',
            'axisActive' => 'Axis Active',
            'mashreqActive' => 'Mashreq Active',
            'isSCBActive' => 'Is Scb Active',
            'MasterCardActive' => 'Master Card Active',
            'IsYESActive' => 'Is Yes Active',
            'isSPHActive' => 'Is Sph Active',
            'isTeePassActive' => 'Is Tee Pass Active',
            'enbdCompAvl' => 'Enbd Comp Avl',
            'enbdPaidAvl' => 'Enbd Paid Avl',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'TieUp' => 'Tie Up',
            'GolfLANDiscount' => 'Golf Lan Discount',
            'GL_RackRateWeekday' => 'Gl Rack Rate Weekday',
            'GL_RackRateWeekend' => 'Gl Rack Rate Weekend',
            'ClosedDays' => 'Closed Days',
            'ContactPerson' => 'Contact Person',
            'ContactNo1' => 'Contact No1',
            'ContactNo2' => 'Contact No2',
            'ContactPerEmail' => 'Contact Per Email',
            'PaymentMode' => 'Payment Mode',
            'ContractValidFrom' => 'Contract Valid From',
            'ContractValidTill' => 'Contract Valid Till',
            'OverNightStay' => 'Over Night Stay',
            'DrivingRange' => 'Driving Range',
            'YearStarted' => 'Year Started',
            'CancellationPolicy' => 'Cancellation Policy',
            'Designer' => 'Designer',
            'PriceIncludes' => 'Price Includes',
            'PriceIncludes2' => 'Price Includes2',
            'PriceIncludes3' => 'Price Includes3',
            'PriceIncludes4' => 'Price Includes4',
            'PriceIncludes5' => 'Price Includes5',
            'CourseType' => 'Course Type',
            'cancelPolicy' => 'Cancel Policy',
            'GolfCoachingStatus' => 'Golf Coaching Status',
            'courseDesigner' => 'Course Designer',
            'hole_9_flag' => 'Hole 9 Flag',
            'hole_18_flag' => 'Hole 18 Flag',
        ];
    }
}
