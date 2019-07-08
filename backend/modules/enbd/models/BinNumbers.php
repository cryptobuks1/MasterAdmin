<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "bin_numbers".
 *
 * @property int $bin_id
 * @property int $bin_number
 * @property int $comp_games
 * @property int $isDiscountAllowed
 * @property string $CardName
 * @property int $isFlexiUser
 */
class BinNumbers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bin_numbers';
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
            [['bin_number', 'comp_games', 'isDiscountAllowed', 'isFlexiUser'], 'integer'],
            [['CardName'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bin_id' => 'Bin ID',
            'bin_number' => 'Bin Number',
            'comp_games' => 'Comp Games',
            'isDiscountAllowed' => 'Is Discount Allowed',
            'CardName' => 'Card Name',
            'isFlexiUser' => 'Is Flexi User',
        ];
    }
}
