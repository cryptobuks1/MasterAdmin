<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "bookingStatusMaster".
 *
 * @property int $bookingStatusID
 * @property string $bookingStatusValue
 *
 * @property BookingMaster[] $bookingMasters
 * @property LearnBookingMaster[] $learnBookingMasters
 */
class BookingStatusMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookingStatusMaster';
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
            [['bookingStatusValue'], 'required'],
            [['bookingStatusValue'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bookingStatusID' => 'Booking Status ID',
            'bookingStatusValue' => 'Booking Status Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingMasters()
    {
        return $this->hasMany(BookingMaster::className(), ['bookingStatus' => 'bookingStatusID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnBookingMasters()
    {
        return $this->hasMany(LearnBookingMaster::className(), ['bookingStatus' => 'bookingStatusID']);
    }
}
