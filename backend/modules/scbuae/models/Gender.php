<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "Gender".
 *
 * @property int $GenderId
 * @property string $GenderType
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property CustomerCareExecutive[] $customerCareExecutives
 */
class Gender extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Gender';
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
            [['GenderType'], 'required'],
            [['IsActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
            [['GenderType'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GenderId' => 'Gender ID',
            'GenderType' => 'Gender Type',
            'IsActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerCareExecutives()
    {
        return $this->hasMany(CustomerCareExecutive::className(), ['GenderId' => 'GenderId']);
    }
}
