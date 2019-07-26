<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "learnBookingMaster".
 *
 * @property int $learnBookingID
 * @property int $GID
 * @property int $coachCategoryID
 * @property string $sessionDate
 * @property string $dateOfBooking
 * @property string $sessionTime1
 * @property string $sessionTime2
 * @property string $confirmedSessionTime
 * @property int $customerID
 * @property int $bookingStatus
 * @property string $ConfirmDateTime
 * @property int $isEscalated
 * @property int $outOfTAT
 * @property int $cancellationReasonID
 * @property string $referenceNum
 * @property string $comment
 * @property int $isActive
 * @property string $createdOn
 * @property string $lastUpdated
 * @property int $createdBy
 *
 * @property CardHolder $customer
 * @property AccountMaster $createdBy0
 * @property BookingStatusMaster $bookingStatus0
 * @property CancellationReason $cancellationReason
 * @property CoachCategoryMaster $coachCategory
 * @property GolfCourseMaster $g
 */
class LearnBookingMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'learnBookingMaster';
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
            [['GID', 'coachCategoryID', 'sessionDate', 'dateOfBooking', 'sessionTime1', 'sessionTime2', 'customerID', 'createdBy'], 'required'],
            [['GID', 'coachCategoryID', 'customerID', 'bookingStatus', 'isEscalated', 'outOfTAT', 'cancellationReasonID', 'isActive', 'createdBy'], 'integer'],
            [['sessionDate', 'dateOfBooking', 'ConfirmDateTime', 'createdOn', 'lastUpdated'], 'safe'],
            [['comment'], 'string'],
            [['sessionTime1', 'sessionTime2', 'confirmedSessionTime'], 'string', 'max' => 20],
            [['referenceNum'], 'string', 'max' => 100],
            [['customerID'], 'exist', 'skipOnError' => true, 'targetClass' => CardHolder::className(), 'targetAttribute' => ['customerID' => 'CardHolderID']],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => AccountMaster::className(), 'targetAttribute' => ['createdBy' => 'accountID']],
            [['bookingStatus'], 'exist', 'skipOnError' => true, 'targetClass' => BookingStatusMaster::className(), 'targetAttribute' => ['bookingStatus' => 'bookingStatusID']],
            [['cancellationReasonID'], 'exist', 'skipOnError' => true, 'targetClass' => CancellationReason::className(), 'targetAttribute' => ['cancellationReasonID' => 'cancellationReasonID']],
            [['coachCategoryID'], 'exist', 'skipOnError' => true, 'targetClass' => CoachCategoryMaster::className(), 'targetAttribute' => ['coachCategoryID' => 'coachCategoryID']],
            [['GID'], 'exist', 'skipOnError' => true, 'targetClass' => GolfCourseMaster::className(), 'targetAttribute' => ['GID' => 'GID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'learnBookingID' => 'Learn Booking ID',
            'GID' => 'Gid',
            'coachCategoryID' => 'Coach Category ID',
            'sessionDate' => 'Session Date',
            'dateOfBooking' => 'Date Of Booking',
            'sessionTime1' => 'Session Time1',
            'sessionTime2' => 'Session Time2',
            'confirmedSessionTime' => 'Confirmed Session Time',
            'customerID' => 'Customer ID',
            'bookingStatus' => 'Booking Status',
            'ConfirmDateTime' => 'Confirm Date Time',
            'isEscalated' => 'Is Escalated',
            'outOfTAT' => 'Out Of Tat',
            'cancellationReasonID' => 'Cancellation Reason ID',
            'referenceNum' => 'Reference Num',
            'comment' => 'Comment',
            'isActive' => 'Is Active',
            'createdOn' => 'Created On',
            'lastUpdated' => 'Last Updated',
            'createdBy' => 'Created By',
        ];
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
    public function getCancellationReason()
    {
        return $this->hasOne(CancellationReason::className(), ['cancellationReasonID' => 'cancellationReasonID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoachCategory()
    {
        return $this->hasOne(CoachCategoryMaster::className(), ['coachCategoryID' => 'coachCategoryID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getG()
    {
        return $this->hasOne(GolfCourseMaster::className(), ['GID' => 'GID']);
    }
}
