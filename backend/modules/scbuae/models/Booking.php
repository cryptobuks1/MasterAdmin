<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "Booking".
 *
 * @property int $BookingId
 * @property int $CustomerCareExecutiveId
 * @property int $GolferId
 * @property int $GolfCourseId
 * @property int $TeeTimeId
 * @property string $ConfirmTeeTime
 * @property string $DateOfPlay
 * @property string $DateOfRequest
 * @property int $NoOfGuest
 * @property string $GuestPaymentId
 * @property string $Guest1Type
 * @property string $Guest1Name
 * @property string $Guest1Email
 * @property int $Guest1Mobile
 * @property int $Guest1Handicap
 * @property int $Guest1MembershipNumber
 * @property string $Guest2Type
 * @property string $Guest2Name
 * @property string $Guest2Email
 * @property int $Guest2Mobile
 * @property int $Guest2Handicap
 * @property int $Guest2MembershipNumber
 * @property string $Guest3Type
 * @property string $Guest3Name
 * @property string $Guest3Email
 * @property int $Guest3Mobile
 * @property int $Guest3Handicap
 * @property int $Guest3MembershipNumber
 * @property string $PaymentMethod
 * @property string $PaymentMethodComment
 * @property int $BookingStatusId
 * @property int $OutOfTATStatus
 * @property string $Comment
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property BookingStatus $bookingStatus
 * @property Golfer $golfer
 * @property CustomerCareExecutive $customerCareExecutive
 * @property GolfCourse $golfCourse
 * @property TeeTime $teeTime
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Booking';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('scbuaeDB');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CustomerCareExecutiveId', 'GolferId', 'GolfCourseId', 'TeeTimeId', 'DateOfRequest', 'BookingStatusId'], 'required'],
            [['CustomerCareExecutiveId', 'GolferId', 'GolfCourseId', 'TeeTimeId', 'NoOfGuest', 'Guest1Mobile', 'Guest1Handicap', 'Guest1MembershipNumber', 'Guest2Mobile', 'Guest2Handicap', 'Guest2MembershipNumber', 'Guest3Mobile', 'Guest3Handicap', 'Guest3MembershipNumber', 'BookingStatusId', 'OutOfTATStatus', 'IsActive'], 'integer'],
            [['DateOfPlay', 'DateOfRequest', 'LastUpdated', 'CreatedOn'], 'safe'],
            [['ConfirmTeeTime', 'GuestPaymentId', 'Guest1Type', 'Guest1Name', 'Guest1Email', 'Guest2Type', 'Guest2Name', 'Guest2Email', 'Guest3Type', 'Guest3Name', 'Guest3Email', 'PaymentMethod', 'PaymentMethodComment'], 'string', 'max' => 100],
            [['Comment'], 'string', 'max' => 5000],
            [['BookingStatusId'], 'exist', 'skipOnError' => true, 'targetClass' => BookingStatus::className(), 'targetAttribute' => ['BookingStatusId' => 'BookingStatusId']],
            [['GolferId'], 'exist', 'skipOnError' => true, 'targetClass' => Golfer::className(), 'targetAttribute' => ['GolferId' => 'GolferId']],
            [['CustomerCareExecutiveId'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerCareExecutive::className(), 'targetAttribute' => ['CustomerCareExecutiveId' => 'CustomerCareExecutiveId']],
            [['GolfCourseId'], 'exist', 'skipOnError' => true, 'targetClass' => GolfCourse::className(), 'targetAttribute' => ['GolfCourseId' => 'GolfCourseId']],
            [['TeeTimeId'], 'exist', 'skipOnError' => true, 'targetClass' => TeeTime::className(), 'targetAttribute' => ['TeeTimeId' => 'TeeTimeId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BookingId' => 'Booking ID',
            'CustomerCareExecutiveId' => 'Customer Care Executive ID',
            'GolferId' => 'Golfer ID',
            'GolfCourseId' => 'Golf Course ID',
            'TeeTimeId' => 'Tee Time ID',
            'ConfirmTeeTime' => 'Confirm Tee Time',
            'DateOfPlay' => 'Date Of Play',
            'DateOfRequest' => 'Date Of Request',
            'NoOfGuest' => 'No Of Guest',
            'GuestPaymentId' => 'Guest Payment ID',
            'Guest1Type' => 'Guest1 Type',
            'Guest1Name' => 'Guest1 Name',
            'Guest1Email' => 'Guest1 Email',
            'Guest1Mobile' => 'Guest1 Mobile',
            'Guest1Handicap' => 'Guest1 Handicap',
            'Guest1MembershipNumber' => 'Guest1 Membership Number',
            'Guest2Type' => 'Guest2 Type',
            'Guest2Name' => 'Guest2 Name',
            'Guest2Email' => 'Guest2 Email',
            'Guest2Mobile' => 'Guest2 Mobile',
            'Guest2Handicap' => 'Guest2 Handicap',
            'Guest2MembershipNumber' => 'Guest2 Membership Number',
            'Guest3Type' => 'Guest3 Type',
            'Guest3Name' => 'Guest3 Name',
            'Guest3Email' => 'Guest3 Email',
            'Guest3Mobile' => 'Guest3 Mobile',
            'Guest3Handicap' => 'Guest3 Handicap',
            'Guest3MembershipNumber' => 'Guest3 Membership Number',
            'PaymentMethod' => 'Payment Method',
            'PaymentMethodComment' => 'Payment Method Comment',
            'BookingStatusId' => 'Booking Status ID',
            'OutOfTATStatus' => 'Out Of Tat Status',
            'Comment' => 'Comment',
            'IsActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingStatus()
    {
        return $this->hasOne(BookingStatus::className(), ['BookingStatusId' => 'BookingStatusId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfer()
    {
        return $this->hasOne(Golfer::className(), ['GolferId' => 'GolferId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerCareExecutive()
    {
        return $this->hasOne(CustomerCareExecutive::className(), ['CustomerCareExecutiveId' => 'CustomerCareExecutiveId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfCourse()
    {
        return $this->hasOne(GolfCourse::className(), ['GolfCourseId' => 'GolfCourseId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeeTime()
    {
        return $this->hasOne(TeeTime::className(), ['TeeTimeId' => 'TeeTimeId']);
    }
}
