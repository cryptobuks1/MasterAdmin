<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "oneTimePassword".
 *
 * @property int $OtpID
 * @property int $UserID
 * @property int $OTP
 * @property int $MID
 * @property int $isActive
 * @property string $CTime
 * @property string $ETime
 * @property int $Times
 */
class OneTimePassword extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oneTimePassword';
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
            [['UserID', 'OTP', 'Times'], 'required'],
            [['UserID', 'OTP', 'MID', 'isActive', 'Times'], 'integer'],
            [['CTime', 'ETime'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'OtpID' => 'Otp ID',
            'UserID' => 'User ID',
            'OTP' => 'Otp',
            'MID' => 'Mid',
            'isActive' => 'Is Active',
            'CTime' => 'C Time',
            'ETime' => 'E Time',
            'Times' => 'Times',
        ];
    }
}
