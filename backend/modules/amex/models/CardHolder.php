<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "CardHolder".
 *
 * @property int $CardHolderID
 * @property string $Mobile
 * @property string $Name
 * @property int $Handicap
 * @property int $CardTypeID
 * @property int $HolderTypeID
 * @property string $SupplementaryMobile
 * @property string $SupplementaryName
 * @property int $SupplementaryHandicap
 * @property int $IsActive
 * @property string $CreatedOn
 * @property string $LastUpdated
 * @property int $CreatedBy
 *
 * @property AccountMaster $createdBy
 * @property GolferLog[] $golferLogs
 * @property BookingMaster[] $bookingMasters
 * @property LearnBookingMaster[] $learnBookingMasters
 */
class CardHolder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $CardTypeName;
    public static function tableName()
    {
        return 'CardHolder';
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
            [['Mobile', 'Name', 'CardTypeID', 'HolderTypeID', 'CreatedOn', 'CreatedBy'], 'required'],
            [['Handicap', 'CardTypeID', 'HolderTypeID', 'SupplementaryHandicap', 'IsActive', 'CreatedBy'], 'integer'],
            [['CreatedOn', 'LastUpdated'], 'safe'],
            [['Mobile', 'Name', 'SupplementaryMobile', 'SupplementaryName'], 'string', 'max' => 100],
            [['CreatedBy'], 'exist', 'skipOnError' => true, 'targetClass' => AccountMaster::className(), 'targetAttribute' => ['CreatedBy' => 'accountID']],
            [['CardTypeName'], 'default',  'on' => 'search','value'=> 'defaultValue'],
            
        ];//CardType::find()->select('CardTypeName')->where(['CardTypeID'=>$this->CardTypeID,'IsActive'=>1])->asArray()->one()
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CardHolderID' => 'Card Holder ID',
            'Mobile' => 'Mobile',
            'Name' => 'Name',
            'Handicap' => 'Handicap',
            'CardTypeID' => 'Card Type ID',
            'HolderTypeID' => 'Holder Type ID',
            'SupplementaryMobile' => 'Supplementary Mobile',
            'SupplementaryName' => 'Supplementary Name',
            'SupplementaryHandicap' => 'Supplementary Handicap',
            'IsActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdated' => 'Last Updated',
            'CreatedBy' => 'Created By',
        ];
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
    public function getGolferLogs()
    {
        return $this->hasMany(GolferLog::className(), ['GolferID' => 'CardHolderID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingMasters()
    {
        return $this->hasMany(BookingMaster::className(), ['customerID' => 'CardHolderID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnBookingMasters()
    {
        return $this->hasMany(LearnBookingMaster::className(), ['customerID' => 'CardHolderID']);
    }
}
