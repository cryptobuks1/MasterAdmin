<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "countryList".
 *
 * @property int $id_countries
 * @property string $name
 * @property string $iso_alpha2
 * @property string $iso_alpha3
 * @property int $iso_numeric
 * @property string $currency_code
 * @property string $currency_name
 * @property string $currrency_symbol
 * @property string $preferred_currrency
 * @property string $flag
 * @property int $isActive
 * @property int $paymntEngine 0 for CCAvenue, and 1 for PayPal
 * @property string $isdCode
 */
class CountryList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'countryList';
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
            [['iso_numeric', 'isActive', 'paymntEngine'], 'integer'],
            [['name'], 'string', 'max' => 200],
            [['iso_alpha2'], 'string', 'max' => 2],
            [['iso_alpha3', 'currency_code', 'preferred_currrency'], 'string', 'max' => 3],
            [['currency_name'], 'string', 'max' => 32],
            [['currrency_symbol', 'isdCode'], 'string', 'max' => 10],
            [['flag'], 'string', 'max' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_countries' => 'Id Countries',
            'name' => 'Name',
            'iso_alpha2' => 'Iso Alpha2',
            'iso_alpha3' => 'Iso Alpha3',
            'iso_numeric' => 'Iso Numeric',
            'currency_code' => 'Currency Code',
            'currency_name' => 'Currency Name',
            'currrency_symbol' => 'Currrency Symbol',
            'preferred_currrency' => 'Preferred Currrency',
            'flag' => 'Flag',
            'isActive' => 'Is Active',
            'paymntEngine' => 'Paymnt Engine',
            'isdCode' => 'Isd Code',
        ];
    }
}
