<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "cancellationReason".
 *
 * @property int $cancellationReasonID
 * @property string $reason
 * @property int $isActive
 * @property string $lastUpdated
 * @property string $createdOn
 *
 * @property BookingMaster[] $bookingMasters
 * @property LearnBookingMaster[] $learnBookingMasters
 */
class CancellationReason extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cancellationReason';
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
            [['reason'], 'required'],
            [['isActive'], 'integer'],
            [['lastUpdated', 'createdOn'], 'safe'],
            [['reason'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cancellationReasonID' => 'Cancellation Reason ID',
            'reason' => 'Reason',
            'isActive' => 'Is Active',
            'lastUpdated' => 'Last Updated',
            'createdOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingMasters()
    {
        return $this->hasMany(BookingMaster::className(), ['cancellationReasonID' => 'cancellationReasonID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnBookingMasters()
    {
        return $this->hasMany(LearnBookingMaster::className(), ['cancellationReasonID' => 'cancellationReasonID']);
    }
}
