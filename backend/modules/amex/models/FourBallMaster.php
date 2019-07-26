<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "fourBallMaster".
 *
 * @property int $fourBallID
 * @property int $fourBallType 1 => golf course club member, 2 => amex card member, 3 => basic guest
 * @property string $fourBallFullName
 * @property string $fourBallMembershipNum
 * @property string $fourBallMobile
 * @property int $fourBallCardType
 * @property int $fourBallCardHolderType
 * @property int $fourBallHandicap
 * @property string $fourBallBookingStatus
 * @property string $fourBallConfirmedDateTime
 * @property string $fourBallPreferredTimeOfPlay
 * @property string $fourBallTimeOfPlay1
 * @property string $fourBallTimeOfPlay2
 * @property string $fourBallConfirmedTimeOfPlay
 * @property string $fourBallComment
 * @property string $fourBallConciergeRemarks
 * @property string $fourBallIsosRemarks
 * @property string $fourBallGolflanRemarks
 * @property string $fourBallMasterRemarks
 * @property int $IsBookingSplit
 * @property int $bookingID
 * @property int $isCancelled
 * @property int $fourBallCancellationReasonID
 * @property string $fourBallCancellationReason
 * @property int $isActive
 * @property string $createdOn
 * @property string $lastUpdated
 *
 * @property BookingMaster $booking
 */
class FourBallMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fourBallMaster';
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
            [['fourBallType', 'fourBallBookingStatus', 'fourBallTimeOfPlay1', 'fourBallTimeOfPlay2', 'bookingID'], 'required'],
            [['fourBallType', 'fourBallCardType', 'fourBallCardHolderType', 'fourBallHandicap', 'IsBookingSplit', 'bookingID', 'isCancelled', 'fourBallCancellationReasonID', 'isActive'], 'integer'],
            [['fourBallConfirmedDateTime', 'fourBallPreferredTimeOfPlay', 'createdOn', 'lastUpdated'], 'safe'],
            [['fourBallComment', 'fourBallConciergeRemarks', 'fourBallIsosRemarks', 'fourBallGolflanRemarks', 'fourBallMasterRemarks', 'fourBallCancellationReason'], 'string'],
            [['fourBallFullName', 'fourBallMembershipNum', 'fourBallMobile'], 'string', 'max' => 100],
            [['fourBallBookingStatus'], 'string', 'max' => 45],
            [['fourBallTimeOfPlay1', 'fourBallTimeOfPlay2', 'fourBallConfirmedTimeOfPlay'], 'string', 'max' => 20],
            [['bookingID'], 'exist', 'skipOnError' => true, 'targetClass' => BookingMaster::className(), 'targetAttribute' => ['bookingID' => 'bookingID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fourBallID' => 'Four Ball ID',
            'fourBallType' => 'Four Ball Type',
            'fourBallFullName' => 'Four Ball Full Name',
            'fourBallMembershipNum' => 'Four Ball Membership Num',
            'fourBallMobile' => 'Four Ball Mobile',
            'fourBallCardType' => 'Four Ball Card Type',
            'fourBallCardHolderType' => 'Four Ball Card Holder Type',
            'fourBallHandicap' => 'Four Ball Handicap',
            'fourBallBookingStatus' => 'Four Ball Booking Status',
            'fourBallConfirmedDateTime' => 'Four Ball Confirmed Date Time',
            'fourBallPreferredTimeOfPlay' => 'Four Ball Preferred Time Of Play',
            'fourBallTimeOfPlay1' => 'Four Ball Time Of Play1',
            'fourBallTimeOfPlay2' => 'Four Ball Time Of Play2',
            'fourBallConfirmedTimeOfPlay' => 'Four Ball Confirmed Time Of Play',
            'fourBallComment' => 'Four Ball Comment',
            'fourBallConciergeRemarks' => 'Four Ball Concierge Remarks',
            'fourBallIsosRemarks' => 'Four Ball Isos Remarks',
            'fourBallGolflanRemarks' => 'Four Ball Golflan Remarks',
            'fourBallMasterRemarks' => 'Four Ball Master Remarks',
            'IsBookingSplit' => 'Is Booking Split',
            'bookingID' => 'Booking ID',
            'isCancelled' => 'Is Cancelled',
            'fourBallCancellationReasonID' => 'Four Ball Cancellation Reason ID',
            'fourBallCancellationReason' => 'Four Ball Cancellation Reason',
            'isActive' => 'Is Active',
            'createdOn' => 'Created On',
            'lastUpdated' => 'Last Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooking()
    {
        return $this->hasOne(BookingMaster::className(), ['bookingID' => 'bookingID']);
    }
}
