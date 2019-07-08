<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "paypal_log".
 *
 * @property int $id
 * @property string $txn_id
 * @property string $log
 * @property string $posted_date
 */
class PaypalLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paypal_log';
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
            [['txn_id', 'log', 'posted_date'], 'required'],
            [['log'], 'string'],
            [['posted_date'], 'safe'],
            [['txn_id'], 'string', 'max' => 600],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'txn_id' => 'Txn ID',
            'log' => 'Log',
            'posted_date' => 'Posted Date',
        ];
    }
}
