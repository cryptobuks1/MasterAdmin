<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "BookingStatus".
 *
 * @property int $BookingStatusId
 * @property string $Value
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property Booking[] $bookings
 */
class BookingStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'BookingStatus';
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
            [['IsActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
            [['Value'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BookingStatusId' => 'Booking Status ID',
            'Value' => 'Value',
            'IsActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['BookingStatusId' => 'BookingStatusId']);
    }
}
