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
    public const SERVER_FORMAT='Y-m-d';
    public const DISPLAY_FORMAT='M d, Y';
    
    public const CardTypeName=[0,'Platinam','Centurion','Charge'];

    public const CardLimit=[    'Platinam'=>['play'=>2,'learn'=>0],
                                'Centurion'=>['play'=>999,'learn'=>999],
                                'Charge'=>['play'=>999,'learn'=>2]
            ];
    public const Platinam=['play'=>2,'learn'=>0]; //play ,Lessons
    public const Centurion=['play'=>999,'learn'=>999];
    public const Charge=['play'=>999,'learn'=>2];
    
    public static function isWeekend($dateOfPlay){ 
        return $isWeekend = date('N', strtotime($dateOfPlay)) >= 6;
    }
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

    public function findModelbymobile($mobile,int $CardTypeID=null)
    {
        //$CardTypeID=($CardTypeID) ? (int)$CardTypeID :$CardTypeID;
       
        if (($model = CardHolder::find()
            ->andFilterWhere(['Mobile' => (int)$mobile,'IsActive'=>1,'CardTypeID'=>$CardTypeID])
            ->asArray()->all()) !== null) {
            
           // echo sizeof($model);

           for($i=0;$i<sizeof($model);$i++){
            $model[$i]['CardTypeName']=CardType::find()->where(['CardTypeID'=>$model[$i]['CardTypeID'],'IsActive'=>1])->asArray()->one()['CardTypeName'];
            $model[$i]['LastPlayBooking']=BookingMaster::find()
                ->andFilterWhere(['customerID'=>$model[$i]['CardHolderID'],'IsActive'=>1])
                ->andFilterWhere(['in', 'bookingStatus', BookingMaster::ACTIVE])
                ->orderBy(['dateOfPlay' => SORT_DESC,])
                ->asArray()->one();
                
            $model[$i]['LastSuplimantryBooking']=FourBallMaster::find()
                ->joinwith('booking')
                ->andFilterWhere(['fourBallFullName'=>$model[$i]['Name'],'fourBallMobile'=>$model[$i]['Mobile'],'fourBallCardType'=>$model[$i]['CardTypeID']])
                ->andFilterWhere(['in', 'bookingStatus', BookingMaster::ACTIVE])
                ->orderBy(['dateOfPlay' => SORT_DESC,])
                ->asArray()->one();

                $date = new \DateTime('now');
                $todayDate=$date->format(CardHolder::SERVER_FORMAT);
                $date->modify('last day of this month');
                $lastDate= $date->format(CardHolder::SERVER_FORMAT);
                $date->modify('First day of this month');
                $FirstDate= $date->format(CardHolder::SERVER_FORMAT);
           
            $model[$i]['MonthlyBookingCount']=BookingMaster::find()
                ->select('count(numOfGolfers) totalbooked')
                ->andFilterWhere(['customerID'=> $model[$i]['CardHolderID']])
                ->andFilterWhere(['between','dateOfPlay',$FirstDate,$lastDate])
                ->andFilterWhere(['in', 'bookingStatus', BookingMaster::ACTIVE])
                ->asArray()->one();
            $model[$i]['MonthlyBookingCount']['Forball']=
                Yii::$app->get('amexDB')->createCommand(
                FourBallMaster::find()
                ->select('count(fourBallMobile) totalbooked')
                ->joinwith('booking')
                ->andFilterWhere(['fourBallFullName'=>$model[$i]['Name'],'fourBallMobile'=>$model[$i]['Mobile'],'fourBallCardType'=>$model[$i]['CardTypeID'],'fourBallMaster.isActive'=>1])
                ->andFilterWhere(['between','dateOfPlay',$FirstDate,$lastDate])
                ->andFilterWhere(['in', 'bookingStatus', BookingMaster::ACTIVE])
                //->asArray()->one();
                ->createCommand()->getRawSql())->queryAll()[0]['totalbooked'];

                if(( $todayDate < $model[$i]['LastPlayBooking']['dateOfPlay'])){
                    $error='Booking Alery Done, You can book next after play';
                }

                if(CardHolder::CardLimit[CardHolder::CardTypeName[$model[$i]['CardTypeID']]]['play'] <=$model[$i]['MonthlyBookingCount']['totalbooked']){
                    $error='Monthly Quota Limit Over';
                }
               
                $model[$i]['MonthlyBookingCount']['MonthlyQuota']=CardHolder::CardLimit[CardHolder::CardTypeName[$model[$i]['CardTypeID']]]['play'];
                $model[$i]['MonthlyBookingCount']['CanBook']=isset($error)?$error:'yes';
                
                //$todayDate;

           }
           
            return $model;
        } else {
            return false;
        }
        
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
     * @Utility
     */
    public static function getDatesArr($days) {
        $datesArr = array();

        $begin = new \DateTime('now');
        $end = (new \DateTime('now'))->add(new \DateInterval('P'.$days.'D'));

        $interval = \DateInterval::createFromDateString('1 day');
        $period = new \DatePeriod($begin, $interval, $end);

        foreach ($period as $dt) {
            $datesArr[] = $dt->format(CardHolder::SERVER_FORMAT);
        }

        return $datesArr;
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
