<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "coachCategoryMaster".
 *
 * @property int $coachCategoryID
 * @property string $category
 *
 * @property GolfCourseCoachCategory[] $golfCourseCoachCategories
 * @property LearnBookingMaster[] $learnBookingMasters
 */
class CoachCategoryMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coachCategoryMaster';
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
            [['category'], 'required'],
            [['category'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'coachCategoryID' => 'Coach Category ID',
            'category' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfCourseCoachCategories()
    {
        return $this->hasMany(GolfCourseCoachCategory::className(), ['coachCategory' => 'coachCategoryID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnBookingMasters()
    {
        return $this->hasMany(LearnBookingMaster::className(), ['coachCategoryID' => 'coachCategoryID']);
    }
}
