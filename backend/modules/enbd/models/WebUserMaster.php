<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "webUserMaster".
 *
 * @property int $User_ID
 * @property string $Login_Name
 * @property string $Fname
 * @property string $Lname
 * @property string $Email
 * @property string $Mobile
 * @property int $mobileVerified
 * @property string $City
 * @property string $ZipCode
 * @property string $Country
 * @property string $Address
 * @property string $Gender
 * @property int $CardTypeID
 * @property string $CardNo
 * @property string $Emirates_card_no
 * @property string $PasswordHash
 * @property string $Password
 * @property string $RealPassword
 * @property string $HomeCourse
 * @property int $Handicap
 * @property string $DOB
 */
class WebUserMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'webUserMaster';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('enbdDB');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mobileVerified', 'CardTypeID', 'Handicap'], 'integer'],
            [['CardNo'], 'string'],
            [['DOB'], 'safe'],
            [['Login_Name', 'Fname', 'Lname', 'Email', 'Mobile', 'City', 'ZipCode', 'Country', 'Address', 'Gender', 'PasswordHash', 'Password', 'RealPassword', 'HomeCourse'], 'string', 'max' => 255],
            [['Emirates_card_no'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'User_ID' => 'User ID',
            'Login_Name' => 'Login Name',
            'Fname' => 'Fname',
            'Lname' => 'Lname',
            'Email' => 'Email',
            'Mobile' => 'Mobile',
            'mobileVerified' => 'Mobile Verified',
            'City' => 'City',
            'ZipCode' => 'Zip Code',
            'Country' => 'Country',
            'Address' => 'Address',
            'Gender' => 'Gender',
            'CardTypeID' => 'Card Type ID',
            'CardNo' => 'Card No',
            'Emirates_card_no' => 'Emirates Card No',
            'PasswordHash' => 'Password Hash',
            'Password' => 'Password',
            'RealPassword' => 'Real Password',
            'HomeCourse' => 'Home Course',
            'Handicap' => 'Handicap',
            'DOB' => 'Dob',
        ];
    }
}
