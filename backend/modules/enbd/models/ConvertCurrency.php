<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "convertCurrency".
 *
 * @property int $currID
 * @property string $CurrencyISO
 * @property string $BaseCurrency
 * @property string $Rate
 * @property string $DateTimeUpdated
 */
class ConvertCurrency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'convertCurrency';
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
            [['Rate'], 'number'],
            [['DateTimeUpdated'], 'safe'],
            [['CurrencyISO', 'BaseCurrency'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'currID' => 'Curr ID',
            'CurrencyISO' => 'Currency Iso',
            'BaseCurrency' => 'Base Currency',
            'Rate' => 'Rate',
            'DateTimeUpdated' => 'Date Time Updated',
        ];
    }
}
