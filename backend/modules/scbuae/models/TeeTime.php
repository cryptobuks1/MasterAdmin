<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "TeeTime".
 *
 * @property int $TeeTimeId
 * @property string $Time
 * @property int $GolfCourseId
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property Booking[] $bookings
 * @property GolfCourse $golfCourse
 */
class TeeTime extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TeeTime';
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
            [['GolfCourseId'], 'required'],
            [['GolfCourseId', 'IsActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
            [['Time'], 'string', 'max' => 10],
            [['GolfCourseId'], 'exist', 'skipOnError' => true, 'targetClass' => GolfCourse::className(), 'targetAttribute' => ['GolfCourseId' => 'GolfCourseId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'TeeTimeId' => 'Tee Time ID',
            'Time' => 'Time',
            'GolfCourseId' => 'Golf Course ID',
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
        return $this->hasMany(Booking::className(), ['TeeTimeId' => 'TeeTimeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfCourse()
    {
        return $this->hasOne(GolfCourse::className(), ['GolfCourseId' => 'GolfCourseId']);
    }
}
