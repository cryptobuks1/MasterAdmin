<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "accountMaster".
 *
 * @property int $accountID
 * @property int $accountTypeID
 * @property string $accountEmail
 * @property string $accountPasswordHash
 * @property string $accountName
 * @property int $isActive
 * @property string $createdOn
 * @property string $lastUpdated
 * @property int $createdBy
 *
 * @property BookingLog[] $bookingLogs
 * @property CardHolder[] $cardHolders
 * @property GolferLog[] $golferLogs
 * @property AccountType $accountType
 * @property AccountPasswordReset[] $accountPasswordResets
 * @property BookingMaster[] $bookingMasters
 * @property LearnBookingMaster[] $learnBookingMasters
 */
class AccountMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    
    public static function tableName()
    {
        return 'accountMaster';
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
            [['accountTypeID', 'accountEmail', 'accountPasswordHash', 'accountName'], 'required'],
            [['accountTypeID', 'isActive', 'createdBy'], 'integer'],
            [['createdOn', 'lastUpdated'], 'safe'],
            [['accountEmail', 'accountPasswordHash', 'accountName'], 'string', 'max' => 100],
            [['accountTypeID'], 'exist', 'skipOnError' => true, 'targetClass' => AccountType::className(), 'targetAttribute' => ['accountTypeID' => 'accountTypeID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'accountID' => 'Account ID',
            'accountTypeID' => 'Account Type ID',
            'accountEmail' => 'Account Email',
            'accountPasswordHash' => 'Account Password Hash',
            'accountName' => 'Account Name',
            'isActive' => 'Is Active',
            'createdOn' => 'Created On',
            'lastUpdated' => 'Last Updated',
            'createdBy' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingLogs()
    {
        return $this->hasMany(BookingLog::className(), ['CreatedBy' => 'accountID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCardHolders()
    {
        return $this->hasMany(CardHolder::className(), ['CreatedBy' => 'accountID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolferLogs()
    {
        return $this->hasMany(GolferLog::className(), ['CreatedBy' => 'accountID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountType()
    {
        return $this->hasOne(AccountType::className(), ['accountTypeID' => 'accountTypeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountPasswordResets()
    {
        return $this->hasMany(AccountPasswordReset::className(), ['accountID' => 'accountID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingMasters()
    {
        return $this->hasMany(BookingMaster::className(), ['createdBy' => 'accountID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnBookingMasters()
    {
        return $this->hasMany(LearnBookingMaster::className(), ['createdBy' => 'accountID']);
    }
}
