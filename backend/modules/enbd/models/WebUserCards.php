<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "webUserCards".
 *
 * @property int $id
 * @property int $User_ID
 * @property int $CardTypeID
 * @property string $CardNo
 * @property string $CardName
 * @property string $ValidFrom
 * @property string $ValidTill
 * @property int $isDiscountAllowed
 * @property int $AvlCompGames
 * @property int $AvlLearnSessions
 * @property int $AvlAssistSessions
 * @property int $AvlGlobalSessions
 * @property int $AvlTrophyGames
 * @property int $AvlPNRGames
 * @property int $AvlTrophyPGames
 * @property int $isActive
 * @property int $isFlexiUser
 * @property string $DateAdded
 * @property string $ActivatedOn
 * @property string $RenewedOn
 * @property string $CountryOrigin
 * @property int $enbdVerified 0-Pending, 1-ConfirmedByBank, 3- DeniedByBank, 4-DeniedByAdmin
 */
class WebUserCards extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'webUserCards';
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
            [['User_ID', 'CardTypeID', 'isDiscountAllowed', 'AvlCompGames', 'AvlLearnSessions', 'AvlAssistSessions', 'AvlGlobalSessions', 'AvlTrophyGames', 'AvlPNRGames', 'AvlTrophyPGames', 'isActive', 'isFlexiUser', 'enbdVerified'], 'integer'],
            [['ValidFrom', 'ValidTill', 'DateAdded', 'ActivatedOn', 'RenewedOn'], 'safe'],
            [['CardNo', 'CountryOrigin'], 'string', 'max' => 255],
            [['CardName'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'User_ID' => 'User ID',
            'CardTypeID' => 'Card Type ID',
            'CardNo' => 'Card No',
            'CardName' => 'Card Name',
            'ValidFrom' => 'Valid From',
            'ValidTill' => 'Valid Till',
            'isDiscountAllowed' => 'Is Discount Allowed',
            'AvlCompGames' => 'Avl Comp Games',
            'AvlLearnSessions' => 'Avl Learn Sessions',
            'AvlAssistSessions' => 'Avl Assist Sessions',
            'AvlGlobalSessions' => 'Avl Global Sessions',
            'AvlTrophyGames' => 'Avl Trophy Games',
            'AvlPNRGames' => 'Avl Pnr Games',
            'AvlTrophyPGames' => 'Avl Trophy P Games',
            'isActive' => 'Is Active',
            'isFlexiUser' => 'Is Flexi User',
            'DateAdded' => 'Date Added',
            'ActivatedOn' => 'Activated On',
            'RenewedOn' => 'Renewed On',
            'CountryOrigin' => 'Country Origin',
            'enbdVerified' => 'Enbd Verified',
        ];
    }
}
