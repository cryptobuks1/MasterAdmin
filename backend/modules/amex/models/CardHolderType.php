<?php

namespace backend\modules\amex\models;

use Yii;

/**
 * This is the model class for table "CardHolderType".
 *
 * @property int $CardHolderTypeID
 * @property string $TypeName
 * @property int $IsActive
 * @property string $CreatedOn
 * @property string $LastUpdated
 */
class CardHolderType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CardHolderType';
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
            [['TypeName'], 'required'],
            [['IsActive'], 'integer'],
            [['CreatedOn', 'LastUpdated'], 'safe'],
            [['TypeName'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CardHolderTypeID' => 'Card Holder Type ID',
            'TypeName' => 'Type Name',
            'IsActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdated' => 'Last Updated',
        ];
    }
}
