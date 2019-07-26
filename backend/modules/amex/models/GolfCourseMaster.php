<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "golfCourseMaster".
 *
 * @property int $GID
 * @property int $golfCourseTypeID
 * @property int $AMEXConciergeActive
 * @property int $ISOSActive
 * @property int $AMEXMasterTieUp
 * @property string $startTime
 * @property string $endTime
 * @property int $AMEXConciergeWeekdayRounds
 * @property int $AMEXConciergeWeekendRounds
 * @property int $ISOSWeekdayRounds
 * @property int $ISOSWeekendRounds
 * @property int $learnSessionDuration
 * @property string $learnInclusions
 * @property int $learnWeekdayPrice
 * @property int $learnWeekendPrice
 *
 * @property BookingMaster[] $bookingMasters
 * @property GolfCourseCoachCategory[] $golfCourseCoachCategories
 * @property GolfCourseTypeMaster $golfCourseType
 * @property LearnBookingMaster[] $learnBookingMasters
 */
class GolfCourseMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golfCourseMaster';
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
            [['golfCourseTypeID', 'AMEXConciergeActive', 'ISOSActive', 'AMEXMasterTieUp', 'AMEXConciergeWeekdayRounds', 'AMEXConciergeWeekendRounds', 'ISOSWeekdayRounds', 'ISOSWeekendRounds', 'learnSessionDuration', 'learnWeekdayPrice', 'learnWeekendPrice'], 'integer'],
            [['startTime', 'endTime'], 'required'],
            [['startTime', 'endTime'], 'safe'],
            [['learnInclusions'], 'string', 'max' => 200],
            [['golfCourseTypeID'], 'exist', 'skipOnError' => true, 'targetClass' => GolfCourseTypeMaster::className(), 'targetAttribute' => ['golfCourseTypeID' => 'golfCourseTypeID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GID' => 'Gid',
            'golfCourseTypeID' => 'Golf Course Type ID',
            'AMEXConciergeActive' => 'Amex Concierge Active',
            'ISOSActive' => 'Isos Active',
            'AMEXMasterTieUp' => 'Amex Master Tie Up',
            'startTime' => 'Start Time',
            'endTime' => 'End Time',
            'AMEXConciergeWeekdayRounds' => 'Amex Concierge Weekday Rounds',
            'AMEXConciergeWeekendRounds' => 'Amex Concierge Weekend Rounds',
            'ISOSWeekdayRounds' => 'Isos Weekday Rounds',
            'ISOSWeekendRounds' => 'Isos Weekend Rounds',
            'learnSessionDuration' => 'Learn Session Duration',
            'learnInclusions' => 'Learn Inclusions',
            'learnWeekdayPrice' => 'Learn Weekday Price',
            'learnWeekendPrice' => 'Learn Weekend Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingMasters()
    {
        return $this->hasMany(BookingMaster::className(), ['GID' => 'GID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfCourseCoachCategories()
    {
        return $this->hasMany(GolfCourseCoachCategory::className(), ['GID' => 'GID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfCourseType()
    {
        return $this->hasOne(GolfCourseTypeMaster::className(), ['golfCourseTypeID' => 'golfCourseTypeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnBookingMasters()
    {
        return $this->hasMany(LearnBookingMaster::className(), ['GID' => 'GID']);
    }
}
