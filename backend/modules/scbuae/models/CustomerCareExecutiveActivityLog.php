<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "CustomerCareExecutiveActivityLog".
 *
 * @property int $CustomerCareExecutiveActivityLogId
 * @property int $CustomerCareExecutiveId
 * @property string $LoginDateTime
 * @property string $LogoutDateTime
 * @property string $OperatingSystem
 * @property string $Browser
 * @property string $IP
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property CustomerCareExecutive $customerCareExecutive
 */
class CustomerCareExecutiveActivityLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CustomerCareExecutiveActivityLog';
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
            [['CustomerCareExecutiveId'], 'required'],
            [['CustomerCareExecutiveId', 'IsActive'], 'integer'],
            [['LoginDateTime', 'LogoutDateTime', 'LastUpdated', 'CreatedOn'], 'safe'],
            [['OperatingSystem', 'Browser'], 'string', 'max' => 65],
            [['IP'], 'string', 'max' => 20],
            [['CustomerCareExecutiveId'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerCareExecutive::className(), 'targetAttribute' => ['CustomerCareExecutiveId' => 'CustomerCareExecutiveId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CustomerCareExecutiveActivityLogId' => 'Customer Care Executive Activity Log ID',
            'CustomerCareExecutiveId' => 'Customer Care Executive ID',
            'LoginDateTime' => 'Login Date Time',
            'LogoutDateTime' => 'Logout Date Time',
            'OperatingSystem' => 'Operating System',
            'Browser' => 'Browser',
            'IP' => 'Ip',
            'IsActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerCareExecutive()
    {
        return $this->hasOne(CustomerCareExecutive::className(), ['CustomerCareExecutiveId' => 'CustomerCareExecutiveId']);
    }
}
