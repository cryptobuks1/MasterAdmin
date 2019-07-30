<?php

namespace backend\modules\amex\models;

use Yii;


class Booking extends \yii\db\ActiveRecord
{    
    public $new_password;
    public $birth_date;
    public $Name;

    /**USE FOR SENARIO */
    public $multipleCards=false;
    public $cardValid=false;
    public $cardtype;
    public $completeStep1=false;

    public $DUMP=[];

    // const SCENARIO_MULTICARD = 'create';
    // const SCENARIO_CARDVALID = 'create';

    // const SCENARIO_CREATE = 'create';
    public const ACTIVE=[1,2,3,5,6];
    public static function tableName()
    {
        return 'bookingMaster';
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
            [['customerID'],'required'],
            [['Name'],'required', 'on' => $this->cardValid],
            [['cardtype'], 'required', 'on' => $this->multipleCards],
            ['Name','nameValid'],
            ['cardtype','cardtypeValid'],
            [['Name'],'string', 'max' => 30],
            [['cardtype'],'number', 'max' => 1],
            ['customerID','cardValid'],
            ['new_password','passwordCriteria'],
        ];
    }

    function cardValid(){
        if (($model = CardHolder::find()->where(['Mobile' => $this->customerID,'IsActive'=>1])->asArray()->all()) == null) {  
            $this->addError('customerID', 'Invalid Number');
        }else {
            $this->cardValid=true;
            if(sizeof($model)>1){$this->multipleCards=true;}
        }
    }

    function nameValid(){
        if (($model = CardHolder::find()->where(['Mobile' => $this->customerID,'Name'=>$this->Name,'IsActive'=>1])->asArray()->all()) == null) {  
            $this->addError('Name', 'Invalid Name');
        }else{
            if(sizeof($model)==1){$this->completeStep1=true;}
            //$this->cardValid=true; 
        }
    }

    function cardtypeValid(){
        if (($model = CardHolder::find()->where(['Mobile' => $this->customerID,'Name'=>$this->Name,'CardTypeID'=>$this->cardtype,'IsActive'=>1])->asArray()->one()) == null) {  
            $this->addError('cardtype', 'Invalid Card');
        }else{
            $this->completeStep1=true;
           // $this->cardValid=true; 
        }
    }

    public function passwordCriteria(){
        if(!empty($this->new_password)){
            if(strlen($this->new_password)<8){
                $this->addError('new_password','Password must contains eight letters one digit and one character.');
            }
            else{
                if(!preg_match('/[0-9]/',$this->new_password)){
                    $this->addError('new_password','Password must contain one digit.');
                }
                if(!preg_match('/[a-zA-Z]/', $this->new_password)){
                    $this->addError('new_password','Password must contain one character.');
                }
            }
        }
    }


    

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'new_password'=>' new Pass',
            'bookingID' => 'Booking ID',
            'GID' => 'Gid',
            'dateOfPlay' => 'Date Of Play',
            'dateOfBooking' => 'Date Of Booking',
            'preferredTimeOfPlay' => 'Preferred Time Of Play',
            'timeOfPlay1' => 'Time Of Play1',
            'timeOfPlay2' => 'Time Of Play2',
            'confirmedTimeOfPlay' => 'Confirmed Time Of Play',
            'numOfGolfers' => 'Num Of Golfers',
            'customerID' => 'Customer Mobile Number',
            'bookingStatus' => 'Booking Status',
            'ConfirmDateTime' => 'Confirm Date Time',
            'isEscalated' => 'Is Escalated',
            'outOfTAT' => 'Out Of Tat',
            'cancellationReasonID' => 'Cancellation Reason ID',
            'cancellationReason' => 'Cancellation Reason',
            'referenceNum' => 'Reference Num',
            'comment' => 'Comment',
            'conciergeRemarks' => 'Concierge Remarks',
            'isosRemarks' => 'Isos Remarks',
            'golflanRemarks' => 'Golflan Remarks',
            'masterRemarks' => 'Master Remarks',
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
        return $this->hasMany(BookingLog::className(), ['BookingID' => 'bookingID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(CardHolder::className(), ['CardHolderID' => 'customerID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(AccountMaster::className(), ['accountID' => 'createdBy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingStatus0()
    {
        return $this->hasOne(BookingStatusMaster::className(), ['bookingStatusID' => 'bookingStatus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCancellationReason0()
    {
        return $this->hasOne(CancellationReason::className(), ['cancellationReasonID' => 'cancellationReasonID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getG()
    {
        return $this->hasOne(GolfCourseMaster::className(), ['GID' => 'GID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFourBallMasters()
    {
        return $this->hasMany(FourBallMaster::className(), ['bookingID' => 'bookingID']);
    }
}
