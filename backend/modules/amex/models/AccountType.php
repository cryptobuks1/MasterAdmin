<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "accountType".
 *
 * @property int $accountTypeID
 * @property string $accountTypeName
 *
 * @property AccountMaster[] $accountMasters
 * @property AccountPermission[] $accountPermissions
 */
class AccountType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accountType';
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountMasters()
    {
        return $this->hasMany(AccountMaster::className(), ['accountTypeID' => 'accountTypeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountPermissions()
    {
        return $this->hasMany(AccountPermission::className(), ['accountTypeID' => 'accountTypeID']);
    }
}
