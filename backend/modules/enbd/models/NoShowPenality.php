<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "noShowPenality".
 *
 * @property int $penalityID
 * @property int $penalityAmount
 * @property string $bookingIDS
 * @property int $payStatus
 * @property string $insertDateTime
 * @property string $updateDateTime
 */
class NoShowPenality extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noShowPenality';
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
            [['penalityAmount', 'bookingIDS', 'insertDateTime', 'updateDateTime'], 'required'],
            [['penalityAmount', 'payStatus'], 'integer'],
            [['insertDateTime', 'updateDateTime'], 'safe'],
            [['bookingIDS'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'penalityID' => 'Penality ID',
            'penalityAmount' => 'Penality Amount',
            'bookingIDS' => 'Booking Ids',
            'payStatus' => 'Pay Status',
            'insertDateTime' => 'Insert Date Time',
            'updateDateTime' => 'Update Date Time',
        ];
    }
}
