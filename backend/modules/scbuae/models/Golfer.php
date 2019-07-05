<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "Golfer".
 *
 * @property int $GolferId
 * @property string $FirstName
 * @property string $LastName
 * @property string $DateOfBirth
 * @property int $Handicap
 * @property string $Email
 * @property string $country
 * @property string $passwordHash
 * @property string $Mobile
 * @property string $Last8Digits
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property Booking[] $bookings
 */
class Golfer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Golfer';
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
            [['FirstName', 'LastName', 'DateOfBirth', 'Email', 'Mobile', 'Last8Digits'], 'required'],
            [['DateOfBirth', 'LastUpdated', 'CreatedOn'], 'safe'],
            [['Handicap', 'IsActive'], 'integer'],
            [['FirstName', 'LastName'], 'string', 'max' => 45],
            [['Email'], 'string', 'max' => 80],
            [['country', 'passwordHash'], 'string', 'max' => 255],
            [['Mobile', 'Last8Digits'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GolferId' => 'Golfer ID',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'DateOfBirth' => 'Date Of Birth',
            'Handicap' => 'Handicap',
            'Email' => 'Email',
            'country' => 'Country',
            'passwordHash' => 'Password Hash',
            'Mobile' => 'Mobile',
            'Last8Digits' => 'Last8 Digits',
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
        return $this->hasMany(Booking::className(), ['GolferId' => 'GolferId']);
    }
}
