<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "AccountType".
 *
 * @property int $accountTypeID
 * @property string $accountTypeName
 */
class AccountType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'AccountType';
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
            [['accountTypeName'], 'required'],
            [['accountTypeName'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'accountTypeID' => 'Account Type ID',
            'accountTypeName' => 'Account Type Name',
        ];
    }
}
