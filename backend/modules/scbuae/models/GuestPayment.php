<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "GuestPayment".
 *
 * @property int $GuestPaymentId
 * @property string $PaymentGatewayOrderId
 * @property string $Amount
 * @property string $CurrencyCode
 * @property string $PaymentDate
 * @property int $CustomerCareExecutiveId
 * @property int $GuestPaymentStatusId
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property CustomerCareExecutive $customerCareExecutive
 * @property GuestPaymentStatus $guestPaymentStatus
 */
class GuestPayment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'GuestPayment';
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
            [['Amount', 'CurrencyCode', 'PaymentDate', 'CustomerCareExecutiveId', 'GuestPaymentStatusId'], 'required'],
            [['PaymentDate', 'LastUpdated', 'CreatedOn'], 'safe'],
            [['CustomerCareExecutiveId', 'GuestPaymentStatusId', 'IsActive'], 'integer'],
            [['PaymentGatewayOrderId'], 'string', 'max' => 100],
            [['Amount', 'CurrencyCode'], 'string', 'max' => 45],
            [['CustomerCareExecutiveId'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerCareExecutive::className(), 'targetAttribute' => ['CustomerCareExecutiveId' => 'CustomerCareExecutiveId']],
            [['GuestPaymentStatusId'], 'exist', 'skipOnError' => true, 'targetClass' => GuestPaymentStatus::className(), 'targetAttribute' => ['GuestPaymentStatusId' => 'GuestPaymentStatusId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GuestPaymentId' => 'Guest Payment ID',
            'PaymentGatewayOrderId' => 'Payment Gateway Order ID',
            'Amount' => 'Amount',
            'CurrencyCode' => 'Currency Code',
            'PaymentDate' => 'Payment Date',
            'CustomerCareExecutiveId' => 'Customer Care Executive ID',
            'GuestPaymentStatusId' => 'Guest Payment Status ID',
            'IsActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
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
    public function getGuestPaymentStatus()
    {
        return $this->hasOne(GuestPaymentStatus::className(), ['GuestPaymentStatusId' => 'GuestPaymentStatusId']);
    }
}
