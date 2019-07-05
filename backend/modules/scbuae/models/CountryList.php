<?php

namespace backend\modules\scbuae\models;

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
 * @property int $paymntEngine
 * @property string $isdCode
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
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
        return Yii::$app->get('scbuaeDB');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_countries', 'iso_numeric', 'isActive', 'paymntEngine'], 'integer'],
            [['name', 'iso_alpha2', 'iso_alpha3', 'currency_code', 'currency_name', 'currrency_symbol', 'preferred_currrency', 'flag', 'isdCode', 'meta_title', 'meta_description', 'meta_keywords'], 'string'],
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
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
        ];
    }
}
