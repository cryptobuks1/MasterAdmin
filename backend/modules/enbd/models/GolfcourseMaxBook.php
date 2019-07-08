<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "GolfcourseMaxBook".
 *
 * @property int $Id
 * @property int $GID
 * @property int $MaxbookCount
 * @property int $Status 0 - Active, 1 - InActive
 */
class GolfcourseMaxBook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'GolfcourseMaxBook';
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
            [['GID', 'Status'], 'required'],
            [['GID', 'MaxbookCount', 'Status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'GID' => 'Gid',
            'MaxbookCount' => 'Maxbook Count',
            'Status' => 'Status',
        ];
    }
}
