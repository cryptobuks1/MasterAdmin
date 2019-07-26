<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "CardType".
 *
 * @property int $CardTypeID
 * @property string $CardTypeName
 * @property int $IsActive
 * @property string $CreatedOn
 * @property string $LastUpdated
 * @property int $CreatedBy
 */
class CardType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CardType';
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
            [['CardTypeName'], 'required'],
            [['IsActive', 'CreatedBy'], 'integer'],
            [['CreatedOn', 'LastUpdated'], 'safe'],
            [['CardTypeName'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CardTypeID' => 'Card Type ID',
            'CardTypeName' => 'Card Type Name',
            'IsActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdated' => 'Last Updated',
            'CreatedBy' => 'Created By',
        ];
    }
}
