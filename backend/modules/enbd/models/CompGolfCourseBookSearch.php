<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\CompGolfCourseBook;

/**
 * CompGolfCourseBookSearch represents the model behind the search form of `backend\modules\enbd\models\CompGolfCourseBook`.
 */
class CompGolfCourseBookSearch extends CompGolfCourseBook
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GID_OPT1', 'GID_OPT2', 'BookID', 'USER_ID', 'parent_book_id', 'booking_type', 'enbdVerified', 'bookingStatus', 'confirm_GID', 'VoucherApplied', 'VoucherID', 'reminderEmail', 'reminderSMS', 'shortNoticeCancel', 'noShowStatus', 'noShowPenality', 'noShowPaidStatus', 'PaidByBookID_Split', 'OfferRedemAtVisa', 'ReverseOfferRedemAtVisa'], 'integer'],
            [['additional_email', 'CardNo', 'dateRequest', 'dateOfPlayPref1', 'slotOfPlayPref1', 'dateOfPlayPref2', 'slotOfPlayPref2', 'dateOfPlayPref3', 'slotOfPlayPref3', 'comment', 'cancellationDate', 'confirm_date', 'confirm_time', 'VoucherNumber', 'currencyISO', 'currencyIcon', 'payStatus', 'RecommedByGolflan', 'GolflanRemarks', 'reasonForCancel', 'VisaCorrelationId'], 'safe'],
            [['totAmount', 'convFee'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = CompGolfCourseBook::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'GID_OPT1' => $this->GID_OPT1,
            'GID_OPT2' => $this->GID_OPT2,
            'BookID' => $this->BookID,
            'USER_ID' => $this->USER_ID,
            'parent_book_id' => $this->parent_book_id,
            'booking_type' => $this->booking_type,
            'enbdVerified' => $this->enbdVerified,
            'dateRequest' => $this->dateRequest,
            'dateOfPlayPref1' => $this->dateOfPlayPref1,
            'slotOfPlayPref1' => $this->slotOfPlayPref1,
            'dateOfPlayPref2' => $this->dateOfPlayPref2,
            'slotOfPlayPref2' => $this->slotOfPlayPref2,
            'dateOfPlayPref3' => $this->dateOfPlayPref3,
            'slotOfPlayPref3' => $this->slotOfPlayPref3,
            'bookingStatus' => $this->bookingStatus,
            'cancellationDate' => $this->cancellationDate,
            'confirm_GID' => $this->confirm_GID,
            'confirm_date' => $this->confirm_date,
            'confirm_time' => $this->confirm_time,
            'VoucherApplied' => $this->VoucherApplied,
            'VoucherID' => $this->VoucherID,
            'totAmount' => $this->totAmount,
            'convFee' => $this->convFee,
            'reminderEmail' => $this->reminderEmail,
            'reminderSMS' => $this->reminderSMS,
            'shortNoticeCancel' => $this->shortNoticeCancel,
            'noShowStatus' => $this->noShowStatus,
            'noShowPenality' => $this->noShowPenality,
            'noShowPaidStatus' => $this->noShowPaidStatus,
            'PaidByBookID_Split' => $this->PaidByBookID_Split,
            'OfferRedemAtVisa' => $this->OfferRedemAtVisa,
            'ReverseOfferRedemAtVisa' => $this->ReverseOfferRedemAtVisa,
        ]);

        $query->andFilterWhere(['like', 'additional_email', $this->additional_email])
            ->andFilterWhere(['like', 'CardNo', $this->CardNo])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'VoucherNumber', $this->VoucherNumber])
            ->andFilterWhere(['like', 'currencyISO', $this->currencyISO])
            ->andFilterWhere(['like', 'currencyIcon', $this->currencyIcon])
            ->andFilterWhere(['like', 'payStatus', $this->payStatus])
            ->andFilterWhere(['like', 'RecommedByGolflan', $this->RecommedByGolflan])
            ->andFilterWhere(['like', 'GolflanRemarks', $this->GolflanRemarks])
            ->andFilterWhere(['like', 'reasonForCancel', $this->reasonForCancel])
            ->andFilterWhere(['like', 'VisaCorrelationId', $this->VisaCorrelationId]);

        return $dataProvider;
    }
}
