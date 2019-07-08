<?php

namespace backend\modules\enbd\models;

use Yii;

/**
 * This is the model class for table "compGolfCourseBook".
 *
 * @property int $GID_OPT1
 * @property int $GID_OPT2
 * @property int $BookID
 * @property int $USER_ID
 * @property int $parent_book_id
 * @property string $additional_email
 * @property int $booking_type 0-Play, 1-Learn, 2-pay N play, 3 -pay N Learn
 * @property string $CardNo
 * @property int $enbdVerified 0-Pending,1-Confirm,3-Rejected
 * @property string $dateRequest
 * @property string $dateOfPlayPref1
 * @property string $slotOfPlayPref1
 * @property string $dateOfPlayPref2
 * @property string $slotOfPlayPref2
 * @property string $dateOfPlayPref3
 * @property string $slotOfPlayPref3
 * @property string $comment
 * @property int $bookingStatus 0-pending, 1-confirmed, 2-cancelled by admin, 3 - cancelled by user
 * @property string $cancellationDate
 * @property int $confirm_GID
 * @property string $confirm_date
 * @property string $confirm_time
 * @property int $VoucherApplied
 * @property int $VoucherID
 * @property string $VoucherNumber
 * @property string $totAmount
 * @property string $convFee
 * @property string $currencyISO
 * @property string $currencyIcon
 * @property string $payStatus 0 Pending, 1 Paid, 2 PaymentNotSuccessful
 * @property int $reminderEmail
 * @property int $reminderSMS
 * @property int $shortNoticeCancel
 * @property int $noShowStatus
 * @property int $noShowPenality
 * @property int $noShowPaidStatus
 * @property string $RecommedByGolflan
 * @property string $GolflanRemarks
 * @property string $reasonForCancel
 * @property int $PaidByBookID_Split
 * @property string $VisaCorrelationId
 * @property int $OfferRedemAtVisa
 * @property int $ReverseOfferRedemAtVisa
 */
class CompGolfCourseBook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compGolfCourseBook';
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
            [['GID_OPT1', 'GID_OPT2', 'USER_ID', 'parent_book_id', 'booking_type', 'enbdVerified', 'bookingStatus', 'confirm_GID', 'VoucherApplied', 'VoucherID', 'reminderEmail', 'reminderSMS', 'shortNoticeCancel', 'noShowStatus', 'noShowPenality', 'noShowPaidStatus', 'PaidByBookID_Split', 'OfferRedemAtVisa', 'ReverseOfferRedemAtVisa'], 'integer'],
            [['GID_OPT2', 'parent_book_id', 'booking_type', 'enbdVerified', 'currencyISO', 'currencyIcon', 'payStatus', 'reasonForCancel'], 'required'],
            [['additional_email', 'CardNo', 'comment'], 'string'],
            [['dateRequest', 'dateOfPlayPref1', 'slotOfPlayPref1', 'dateOfPlayPref2', 'slotOfPlayPref2', 'dateOfPlayPref3', 'slotOfPlayPref3', 'cancellationDate', 'confirm_date', 'confirm_time'], 'safe'],
            [['totAmount', 'convFee'], 'number'],
            [['VoucherNumber'], 'string', 'max' => 255],
            [['currencyISO', 'currencyIcon'], 'string', 'max' => 10],
            [['payStatus'], 'string', 'max' => 225],
            [['RecommedByGolflan', 'GolflanRemarks', 'reasonForCancel'], 'string', 'max' => 2005],
            [['VisaCorrelationId'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GID_OPT1' => 'Gid Opt1',
            'GID_OPT2' => 'Gid Opt2',
            'BookID' => 'Book ID',
            'USER_ID' => 'User ID',
            'parent_book_id' => 'Parent Book ID',
            'additional_email' => 'Additional Email',
            'booking_type' => 'Booking Type',
            'CardNo' => 'Card No',
            'enbdVerified' => 'Enbd Verified',
            'dateRequest' => 'Date Request',
            'dateOfPlayPref1' => 'Date Of Play Pref1',
            'slotOfPlayPref1' => 'Slot Of Play Pref1',
            'dateOfPlayPref2' => 'Date Of Play Pref2',
            'slotOfPlayPref2' => 'Slot Of Play Pref2',
            'dateOfPlayPref3' => 'Date Of Play Pref3',
            'slotOfPlayPref3' => 'Slot Of Play Pref3',
            'comment' => 'Comment',
            'bookingStatus' => 'Booking Status',
            'cancellationDate' => 'Cancellation Date',
            'confirm_GID' => 'Confirm Gid',
            'confirm_date' => 'Confirm Date',
            'confirm_time' => 'Confirm Time',
            'VoucherApplied' => 'Voucher Applied',
            'VoucherID' => 'Voucher ID',
            'VoucherNumber' => 'Voucher Number',
            'totAmount' => 'Tot Amount',
            'convFee' => 'Conv Fee',
            'currencyISO' => 'Currency Iso',
            'currencyIcon' => 'Currency Icon',
            'payStatus' => 'Pay Status',
            'reminderEmail' => 'Reminder Email',
            'reminderSMS' => 'Reminder Sms',
            'shortNoticeCancel' => 'Short Notice Cancel',
            'noShowStatus' => 'No Show Status',
            'noShowPenality' => 'No Show Penality',
            'noShowPaidStatus' => 'No Show Paid Status',
            'RecommedByGolflan' => 'Recommed By Golflan',
            'GolflanRemarks' => 'Golflan Remarks',
            'reasonForCancel' => 'Reason For Cancel',
            'PaidByBookID_Split' => 'Paid By Book Id Split',
            'VisaCorrelationId' => 'Visa Correlation ID',
            'OfferRedemAtVisa' => 'Offer Redem At Visa',
            'ReverseOfferRedemAtVisa' => 'Reverse Offer Redem At Visa',
        ];
    }
}
