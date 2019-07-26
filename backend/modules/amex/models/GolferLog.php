<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "GolferLog".
 *
 * @property int $GolferLogID
 * @property int $GolferID
 * @property int $CreatedBy
 * @property int $GolferOperationLogID
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property CardHolder $golfer
 * @property GolferOperationLog $golferOperationLog
 * @property AccountMaster $createdBy
 */
class GolferLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'GolferLog';
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
            [['GolferID', 'CreatedBy', 'GolferOperationLogID'], 'required'],
            [['GolferID', 'CreatedBy', 'GolferOperationLogID', 'IsActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
            [['GolferID'], 'exist', 'skipOnError' => true, 'targetClass' => CardHolder::className(), 'targetAttribute' => ['GolferID' => 'CardHolderID']],
            [['GolferOperationLogID'], 'exist', 'skipOnError' => true, 'targetClass' => GolferOperationLog::className(), 'targetAttribute' => ['GolferOperationLogID' => 'GolferOperationLogID']],
            [['CreatedBy'], 'exist', 'skipOnError' => true, 'targetClass' => AccountMaster::className(), 'targetAttribute' => ['CreatedBy' => 'accountID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GolferLogID' => 'Golfer Log ID',
            'GolferID' => 'Golfer ID',
            'CreatedBy' => 'Created By',
            'GolferOperationLogID' => 'Golfer Operation Log ID',
            'IsActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfer()
    {
        return $this->hasOne(CardHolder::className(), ['CardHolderID' => 'GolferID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolferOperationLog()
    {
        return $this->hasOne(GolferOperationLog::className(), ['GolferOperationLogID' => 'GolferOperationLogID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(AccountMaster::className(), ['accountID' => 'CreatedBy']);
    }
}
