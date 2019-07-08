<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "WeekDayBinNumbers".
 *
 * @property int $SrNo
 * @property int $BinNumber
 * @property int $IsActive
 */
class WeekDayBinNumbers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'WeekDayBinNumbers';
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
            [['BinNumber'], 'required'],
            [['BinNumber', 'IsActive'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'SrNo' => 'Sr No',
            'BinNumber' => 'Bin Number',
            'IsActive' => 'Is Active',
        ];
    }
}
