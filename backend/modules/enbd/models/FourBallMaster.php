<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "fourBallMaster".
 *
 * @property int $fourBallID
 * @property int $BookID
 * @property string $fourBallName
 * @property string $fourBallEmail
 * @property string $fourBallPhoneNum
 * @property int $bookedByUserID
 * @property string $cdate
 */
class FourBallMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fourBallMaster';
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
            [['BookID', 'bookedByUserID'], 'integer'],
            [['cdate'], 'safe'],
            [['fourBallName', 'fourBallEmail', 'fourBallPhoneNum'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fourBallID' => 'Four Ball ID',
            'BookID' => 'Book ID',
            'fourBallName' => 'Four Ball Name',
            'fourBallEmail' => 'Four Ball Email',
            'fourBallPhoneNum' => 'Four Ball Phone Num',
            'bookedByUserID' => 'Booked By User ID',
            'cdate' => 'Cdate',
        ];
    }
}
