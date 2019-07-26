<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "BookingOperationLog".
 *
 * @property int $BookingOperationLogID
 * @property string $Value
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property BookingLog[] $bookingLogs
 */
class BookingOperationLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'BookingOperationLog';
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
            [['Value'], 'string'],
            [['IsActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BookingOperationLogID' => 'Booking Operation Log ID',
            'Value' => 'Value',
            'IsActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingLogs()
    {
        return $this->hasMany(BookingLog::className(), ['BookingOperationLogID' => 'BookingOperationLogID']);
    }
}
