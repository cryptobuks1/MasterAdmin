<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "CustomerCareExecutive".
 *
 * @property int $CustomerCareExecutiveId
 * @property string $FirstName
 * @property string $LastName
 * @property int $GenderId
 * @property string $UserId
 * @property string $Email
 * @property string $Password
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property Booking[] $bookings
 * @property Gender $gender
 * @property CustomerCareExecutiveActivityLog[] $customerCareExecutiveActivityLogs
 * @property GuestPayment[] $guestPayments
 * @property PreAuth[] $preAuths
 */
class CustomerCareExecutive extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CustomerCareExecutive';
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
            [['FirstName', 'GenderId', 'Email', 'Password'], 'required'],
            [['GenderId', 'IsActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
            [['FirstName', 'LastName'], 'string', 'max' => 45],
            [['UserId', 'Email'], 'string', 'max' => 80],
            [['Password'], 'string', 'max' => 100],
            [['GenderId'], 'exist', 'skipOnError' => true, 'targetClass' => Gender::className(), 'targetAttribute' => ['GenderId' => 'GenderId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CustomerCareExecutiveId' => 'Customer Care Executive ID',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'GenderId' => 'Gender ID',
            'UserId' => 'User ID',
            'Email' => 'Email',
            'Password' => 'Password',
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
        return $this->hasMany(Booking::className(), ['CustomerCareExecutiveId' => 'CustomerCareExecutiveId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGender()
    {
        return $this->hasOne(Gender::className(), ['GenderId' => 'GenderId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerCareExecutiveActivityLogs()
    {
        return $this->hasMany(CustomerCareExecutiveActivityLog::className(), ['CustomerCareExecutiveId' => 'CustomerCareExecutiveId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuestPayments()
    {
        return $this->hasMany(GuestPayment::className(), ['CustomerCareExecutiveId' => 'CustomerCareExecutiveId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreAuths()
    {
        return $this->hasMany(PreAuth::className(), ['CustomerCareExecutiveId' => 'CustomerCareExecutiveId']);
    }
}
