<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "golfCourseCoachCategory".
 *
 * @property int $golfCourseCoachCategoryID
 * @property int $GID
 * @property int $coachCategory
 *
 * @property CoachCategoryMaster $coachCategory0
 * @property GolfCourseMaster $g
 */
class GolfCourseCoachCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golfCourseCoachCategory';
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
            [['GID', 'coachCategory'], 'required'],
            [['GID', 'coachCategory'], 'integer'],
            [['coachCategory'], 'exist', 'skipOnError' => true, 'targetClass' => CoachCategoryMaster::className(), 'targetAttribute' => ['coachCategory' => 'coachCategoryID']],
            [['GID'], 'exist', 'skipOnError' => true, 'targetClass' => GolfCourseMaster::className(), 'targetAttribute' => ['GID' => 'GID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'golfCourseCoachCategoryID' => 'Golf Course Coach Category ID',
            'GID' => 'Gid',
            'coachCategory' => 'Coach Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoachCategory0()
    {
        return $this->hasOne(CoachCategoryMaster::className(), ['coachCategoryID' => 'coachCategory']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getG()
    {
        return $this->hasOne(GolfCourseMaster::className(), ['GID' => 'GID']);
    }
}
