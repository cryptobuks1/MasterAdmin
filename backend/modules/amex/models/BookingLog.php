<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "BookingLog".
 *
 * @property int $BookingLogID
 * @property int $BookingID
 * @property int $fourBallID
 * @property int $BookingTypeID
 * @property int $CreatedBy
 * @property int $BookingOperationLogID
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property BookingOperationLog $bookingOperationLog
 * @property AccountMaster $createdBy
 * @property BookingMaster $booking
 * @property GolfCourseTypeMaster $bookingType
 */
class BookingLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'BookingLog';
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
            [['BookingID', 'CreatedBy', 'BookingOperationLogID'], 'required'],
            [['BookingID', 'fourBallID', 'BookingTypeID', 'CreatedBy', 'BookingOperationLogID', 'IsActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
            [['BookingOperationLogID'], 'exist', 'skipOnError' => true, 'targetClass' => BookingOperationLog::className(), 'targetAttribute' => ['BookingOperationLogID' => 'BookingOperationLogID']],
            [['CreatedBy'], 'exist', 'skipOnError' => true, 'targetClass' => AccountMaster::className(), 'targetAttribute' => ['CreatedBy' => 'accountID']],
            [['BookingID'], 'exist', 'skipOnError' => true, 'targetClass' => BookingMaster::className(), 'targetAttribute' => ['BookingID' => 'bookingID']],
            [['BookingTypeID'], 'exist', 'skipOnError' => true, 'targetClass' => GolfCourseTypeMaster::className(), 'targetAttribute' => ['BookingTypeID' => 'golfCourseTypeID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BookingLogID' => 'Booking Log ID',
            'BookingID' => 'Booking ID',
            'fourBallID' => 'Four Ball ID',
            'BookingTypeID' => 'Booking Type ID',
            'CreatedBy' => 'Created By',
            'BookingOperationLogID' => 'Booking Operation Log ID',
            'IsActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingOperationLog()
    {
        return $this->hasOne(BookingOperationLog::className(), ['BookingOperationLogID' => 'BookingOperationLogID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(AccountMaster::className(), ['accountID' => 'CreatedBy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooking()
    {
        return $this->hasOne(BookingMaster::className(), ['bookingID' => 'BookingID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingType()
    {
        return $this->hasOne(GolfCourseTypeMaster::className(), ['golfCourseTypeID' => 'BookingTypeID']);
    }
}
