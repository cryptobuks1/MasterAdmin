<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "golfCourseTypeMaster".
 *
 * @property int $golfCourseTypeID
 * @property string $golfCourseType
 *
 * @property BookingLog[] $bookingLogs
 * @property GolfCourseMaster[] $golfCourseMasters
 */
class GolfCourseTypeMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golfCourseTypeMaster';
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
            [['golfCourseType'], 'required'],
            [['golfCourseType'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'golfCourseTypeID' => 'Golf Course Type ID',
            'golfCourseType' => 'Golf Course Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingLogs()
    {
        return $this->hasMany(BookingLog::className(), ['BookingTypeID' => 'golfCourseTypeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfCourseMasters()
    {
        return $this->hasMany(GolfCourseMaster::className(), ['golfCourseTypeID' => 'golfCourseTypeID']);
    }
}
