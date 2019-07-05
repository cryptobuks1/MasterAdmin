<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "GuestPaymentStatus".
 *
 * @property int $GuestPaymentStatusId
 * @property string $Status
 * @property string $TextToDisplay
 * @property int $isActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property GuestPayment[] $guestPayments
 */
class GuestPaymentStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'GuestPaymentStatus';
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
            [['Status'], 'required'],
            [['isActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
            [['Status', 'TextToDisplay'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GuestPaymentStatusId' => 'Guest Payment Status ID',
            'Status' => 'Status',
            'TextToDisplay' => 'Text To Display',
            'isActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuestPayments()
    {
        return $this->hasMany(GuestPayment::className(), ['GuestPaymentStatusId' => 'GuestPaymentStatusId']);
    }
}
