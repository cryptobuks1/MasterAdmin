<?php

namespace backend\modules\scbuae\models;

use Yii;

/**
 * This is the model class for table "AccountPermission".
 *
 * @property int $accountTypeID
 * @property int $createBookings
 * @property int $viewBookings
 * @property int $viewEscalatedBookings
 * @property int $editBookings
 * @property int $createCustomers
 * @property int $viewCustomers
 * @property int $editCustomers
 * @property int $createAccounts
 * @property int $viewAccounts
 * @property int $editAccounts
 * @property int $bookingsReport
 * @property int $customerBookingsReport
 * @property int $customersReport
 */
class AccountPermission extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'AccountPermission';
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
            [['accountTypeID'], 'required'],
            [['accountTypeID', 'createBookings', 'viewBookings', 'viewEscalatedBookings', 'editBookings', 'createCustomers', 'viewCustomers', 'editCustomers', 'createAccounts', 'viewAccounts', 'editAccounts', 'bookingsReport', 'customerBookingsReport', 'customersReport'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'accountTypeID' => 'Account Type ID',
            'createBookings' => 'Create Bookings',
            'viewBookings' => 'View Bookings',
            'viewEscalatedBookings' => 'View Escalated Bookings',
            'editBookings' => 'Edit Bookings',
            'createCustomers' => 'Create Customers',
            'viewCustomers' => 'View Customers',
            'editCustomers' => 'Edit Customers',
            'createAccounts' => 'Create Accounts',
            'viewAccounts' => 'View Accounts',
            'editAccounts' => 'Edit Accounts',
            'bookingsReport' => 'Bookings Report',
            'customerBookingsReport' => 'Customer Bookings Report',
            'customersReport' => 'Customers Report',
        ];
    }
}
