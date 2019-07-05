<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "WeekDayGamesOnly".
 *
 * @property int $WeekDayGamesOnlyID
 * @property int $GolfCourseId
 * @property int $Gid
 * @property int $isActive
 * @property string $CreatedOn
 * @property string $LastUpdatedOn
 */
class WeekDayGamesOnly extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'WeekDayGamesOnly';
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
            [['GolfCourseId', 'Gid'], 'required'],
            [['GolfCourseId', 'Gid', 'isActive'], 'integer'],
            [['CreatedOn', 'LastUpdatedOn'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'WeekDayGamesOnlyID' => 'Week Day Games Only ID',
            'GolfCourseId' => 'Golf Course ID',
            'Gid' => 'Gid',
            'isActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdatedOn' => 'Last Updated On',
        ];
    }
}
