<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "GolfCourse".
 *
 * @property int $GolfCourseId
 * @property string $Name
 * @property int $Gid
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property Booking[] $bookings
 * @property TeeTime[] $teeTimes
 */
class GolfCourse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'GolfCourse';
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
            [['Gid'], 'required'],
            [['Gid', 'IsActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
            [['Name'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GolfCourseId' => 'Golf Course ID',
            'Name' => 'Name',
            'Gid' => 'Gid',
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
        return $this->hasMany(Booking::className(), ['GolfCourseId' => 'GolfCourseId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeeTimes()
    {
        return $this->hasMany(TeeTime::className(), ['GolfCourseId' => 'GolfCourseId']);
    }
}
