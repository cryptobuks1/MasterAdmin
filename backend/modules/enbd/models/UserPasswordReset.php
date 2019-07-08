<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "user_password_reset".
 *
 * @property int $upr_id
 * @property int $user_id
 * @property string $resetkey
 * @property string $cdate
 * @property string $udate
 * @property int $status
 */
class UserPasswordReset extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_password_reset';
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
            [['user_id', 'resetkey', 'cdate', 'udate', 'status'], 'required'],
            [['user_id', 'status'], 'integer'],
            [['cdate', 'udate'], 'safe'],
            [['resetkey'], 'string', 'max' => 36],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'upr_id' => 'Upr ID',
            'user_id' => 'User ID',
            'resetkey' => 'Resetkey',
            'cdate' => 'Cdate',
            'udate' => 'Udate',
            'status' => 'Status',
        ];
    }
}
