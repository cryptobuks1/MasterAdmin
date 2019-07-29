<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "bookingMaster".
 *
 * @property int $bookingID
 * @property int $GID
 * @property string $dateOfPlay
 * @property string $dateOfBooking
 * @property string $preferredTimeOfPlay
 * @property string $timeOfPlay1
 * @property string $timeOfPlay2
 * @property string $confirmedTimeOfPlay
 * @property int $numOfGolfers
 * @property int $customerID
 * @property int $bookingStatus
 * @property string $ConfirmDateTime
 * @property int $isEscalated
 * @property int $outOfTAT
 * @property int $cancellationReasonID
 * @property string $cancellationReason
 * @property string $referenceNum
 * @property string $comment
 * @property string $conciergeRemarks
 * @property string $isosRemarks
 * @property string $golflanRemarks
 * @property string $masterRemarks
 * @property int $isActive
 * @property string $createdOn
 * @property string $lastUpdated
 * @property int $createdBy
 *
 * @property BookingLog[] $bookingLogs
 * @property CardHolder $customer
 * @property AccountMaster $createdBy0
 * @property BookingStatusMaster $bookingStatus0
 * @property CancellationReason $cancellationReason0
 * @property GolfCourseMaster $g
 * @property FourBallMaster[] $fourBallMasters
 */
class BookingMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public const ACTIVE=[1,2,3,5,6];
    public static function tableName()
    {
        return 'bookingMaster';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('amexDB');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GID', 'dateOfPlay', 'dateOfBooking', 'timeOfPlay1', 'timeOfPlay2', 'numOfGolfers', 'customerID', 'createdBy'], 'required'],
            [['GID', 'numOfGolfers', 'customerID', 'bookingStatus', 'isEscalated', 'outOfTAT', 'cancellationReasonID', 'isActive', 'createdBy'], 'integer'],
            [['dateOfPlay', 'dateOfBooking', 'preferredTimeOfPlay', 'ConfirmDateTime', 'createdOn', 'lastUpdated'], 'safe'],
            [['cancellationReason', 'comment', 'conciergeRemarks', 'isosRemarks', 'golflanRemarks', 'masterRemarks'], 'string'],
            [['timeOfPlay1', 'timeOfPlay2', 'confirmedTimeOfPlay'], 'string', 'max' => 20],
            [['referenceNum'], 'string', 'max' => 100],
            [['customerID'], 'exist', 'skipOnError' => true, 'targetClass' => CardHolder::className(), 'targetAttribute' => ['customerID' => 'CardHolderID']],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => AccountMaster::className(), 'targetAttribute' => ['createdBy' => 'accountID']],
            [['bookingStatus'], 'exist', 'skipOnError' => true, 'targetClass' => BookingStatusMaster::className(), 'targetAttribute' => ['bookingStatus' => 'bookingStatusID']],
            [['cancellationReasonID'], 'exist', 'skipOnError' => true, 'targetClass' => CancellationReason::className(), 'targetAttribute' => ['cancellationReasonID' => 'cancellationReasonID']],
            [['GID'], 'exist', 'skipOnError' => true, 'targetClass' => GolfCourseMaster::className(), 'targetAttribute' => ['GID' => 'GID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bookingID' => 'Booking ID',
            'GID' => 'Gid',
            'dateOfPlay' => 'Date Of Play',
            'dateOfBooking' => 'Date Of Booking',
            'preferredTimeOfPlay' => 'Preferred Time Of Play',
            'timeOfPlay1' => 'Time Of Play1',
            'timeOfPlay2' => 'Time Of Play2',
            'confirmedTimeOfPlay' => 'Confirmed Time Of Play',
            'numOfGolfers' => 'Num Of Golfers',
            'customerID' => 'Customer ID',
            'bookingStatus' => 'Booking Status',
            'ConfirmDateTime' => 'Confirm Date Time',
            'isEscalated' => 'Is Escalated',
            'outOfTAT' => 'Out Of Tat',
            'cancellationReasonID' => 'Cancellation Reason ID',
            'cancellationReason' => 'Cancellation Reason',
            'referenceNum' => 'Reference Num',
            'comment' => 'Comment',
            'conciergeRemarks' => 'Concierge Remarks',
            'isosRemarks' => 'Isos Remarks',
            'golflanRemarks' => 'Golflan Remarks',
            'masterRemarks' => 'Master Remarks',
            'isActive' => 'Is Active',
            'createdOn' => 'Created On',
            'lastUpdated' => 'Last Updated',
            'createdBy' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingLogs()
    {
        return $this->hasMany(BookingLog::className(), ['BookingID' => 'bookingID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(CardHolder::className(), ['CardHolderID' => 'customerID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(AccountMaster::className(), ['accountID' => 'createdBy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingStatus0()
    {
        return $this->hasOne(BookingStatusMaster::className(), ['bookingStatusID' => 'bookingStatus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCancellationReason0()
    {
        return $this->hasOne(CancellationReason::className(), ['cancellationReasonID' => 'cancellationReasonID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getG()
    {
        return $this->hasOne(GolfCourseMaster::className(), ['GID' => 'GID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFourBallMasters()
    {
        return $this->hasMany(FourBallMaster::className(), ['bookingID' => 'bookingID']);
    }
}
