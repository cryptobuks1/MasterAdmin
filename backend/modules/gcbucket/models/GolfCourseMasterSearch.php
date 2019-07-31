<?php

namespace backend\modules\gcbucket\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\gcbucket\models\GolfCourseMaster;

/**
 * GolfCourseMasterSearch represents the model behind the search form of `backend\modules\gcbucket\models\GolfCourseMaster`.
 */
class GolfCourseMasterSearch extends GolfCourseMaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GID', 'GCType', 'total_reviews', 'HoleType', 'Par', 'CompAvl', 'PaidAvl', 'clubBoolAvl', 'isOttoActive', 'CartAvl', 'CaddyAvl', 'ClubAvl', 'EqpRentalAvl', 'CoachingAvil', 'CoachingAvilPaid', 'FeatureRanking', 'isActive', 'paymntEngine', 'payPlayMinDays', 'compPlayMinDays', 'MaxHrsToCancel', 'rakActive', 'isHDFCActive', 'isIsosAxisActive', 'axisActive', 'mashreqActive', 'isSCBActive', 'MasterCardActive', 'IsYESActive', 'isSPHActive', 'isTeePassActive', 'isAmexActive', 'enbdCompAvl', 'enbdPaidAvl', 'GolfLANDiscount', 'GL_RackRateWeekday', 'GL_RackRateWeekend', 'OverNightStay', 'DrivingRange', 'GolfCoachingStatus', 'hole_9_flag', 'hole_18_flag'], 'integer'],
            [['GCName', 'Address', 'City', 'Country', 'Continent', 'CountryISO', 'CountryISO2', 'Description', 'TermsCondition', 'LogoURL', 'ImgURL', 'CurrencyISO', 'currencyIcon', 'other_info', 'GreenFeeRange', 'ottoURL', 'meta_title', 'meta_description', 'meta_keywords', 'TieUp', 'ClosedDays', 'ContactPerson', 'ContactNo1', 'ContactNo2', 'ContactPerEmail', 'PaymentMode', 'ContractValidFrom', 'ContractValidTill', 'YearStarted', 'CancellationPolicy', 'Designer', 'PriceIncludes', 'PriceIncludes2', 'PriceIncludes3', 'PriceIncludes4', 'PriceIncludes5', 'CourseType', 'cancelPolicy', 'courseDesigner', 'CreatedOn'], 'safe'],
            [['min_price', 'max_price', 'gc_weekday_rakrate', 'gc_weekend_rakrate', 'online_weekday_rakrate', 'online_weekend_rakrate', 'average_rating', 'Latitude', 'Longitude', 'length', 'Slope'], 'number'],
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
        $query = GolfCourseMaster::find();

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
            'GID' => $this->GID,
            'GCType' => $this->GCType,
            'min_price' => $this->min_price,
            'max_price' => $this->max_price,
            'gc_weekday_rakrate' => $this->gc_weekday_rakrate,
            'gc_weekend_rakrate' => $this->gc_weekend_rakrate,
            'online_weekday_rakrate' => $this->online_weekday_rakrate,
            'online_weekend_rakrate' => $this->online_weekend_rakrate,
            'total_reviews' => $this->total_reviews,
            'average_rating' => $this->average_rating,
            'Latitude' => $this->Latitude,
            'Longitude' => $this->Longitude,
            'length' => $this->length,
            'HoleType' => $this->HoleType,
            'Par' => $this->Par,
            'Slope' => $this->Slope,
            'CompAvl' => $this->CompAvl,
            'PaidAvl' => $this->PaidAvl,
            'clubBoolAvl' => $this->clubBoolAvl,
            'isOttoActive' => $this->isOttoActive,
            'CartAvl' => $this->CartAvl,
            'CaddyAvl' => $this->CaddyAvl,
            'ClubAvl' => $this->ClubAvl,
            'EqpRentalAvl' => $this->EqpRentalAvl,
            'CoachingAvil' => $this->CoachingAvil,
            'CoachingAvilPaid' => $this->CoachingAvilPaid,
            'FeatureRanking' => $this->FeatureRanking,
            'isActive' => $this->isActive,
            'paymntEngine' => $this->paymntEngine,
            'payPlayMinDays' => $this->payPlayMinDays,
            'compPlayMinDays' => $this->compPlayMinDays,
            'MaxHrsToCancel' => $this->MaxHrsToCancel,
            'rakActive' => $this->rakActive,
            'isHDFCActive' => $this->isHDFCActive,
            'isIsosAxisActive' => $this->isIsosAxisActive,
            'axisActive' => $this->axisActive,
            'mashreqActive' => $this->mashreqActive,
            'isSCBActive' => $this->isSCBActive,
            'MasterCardActive' => $this->MasterCardActive,
            'IsYESActive' => $this->IsYESActive,
            'isSPHActive' => $this->isSPHActive,
            'isTeePassActive' => $this->isTeePassActive,
            'isAmexActive' => $this->isAmexActive,
            'enbdCompAvl' => $this->enbdCompAvl,
            'enbdPaidAvl' => $this->enbdPaidAvl,
            'GolfLANDiscount' => $this->GolfLANDiscount,
            'GL_RackRateWeekday' => $this->GL_RackRateWeekday,
            'GL_RackRateWeekend' => $this->GL_RackRateWeekend,
            'ContractValidFrom' => $this->ContractValidFrom,
            'ContractValidTill' => $this->ContractValidTill,
            'OverNightStay' => $this->OverNightStay,
            'DrivingRange' => $this->DrivingRange,
            'YearStarted' => $this->YearStarted,
            'GolfCoachingStatus' => $this->GolfCoachingStatus,
            'hole_9_flag' => $this->hole_9_flag,
            'hole_18_flag' => $this->hole_18_flag,
            'CreatedOn' => $this->CreatedOn,
        ]);

        $query->andFilterWhere(['like', 'GCName', $this->GCName])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'City', $this->City])
            ->andFilterWhere(['like', 'Country', $this->Country])
            ->andFilterWhere(['like', 'Continent', $this->Continent])
            ->andFilterWhere(['like', 'CountryISO', $this->CountryISO])
            ->andFilterWhere(['like', 'CountryISO2', $this->CountryISO2])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'TermsCondition', $this->TermsCondition])
            ->andFilterWhere(['like', 'LogoURL', $this->LogoURL])
            ->andFilterWhere(['like', 'ImgURL', $this->ImgURL])
            ->andFilterWhere(['like', 'CurrencyISO', $this->CurrencyISO])
            ->andFilterWhere(['like', 'currencyIcon', $this->currencyIcon])
            ->andFilterWhere(['like', 'other_info', $this->other_info])
            ->andFilterWhere(['like', 'GreenFeeRange', $this->GreenFeeRange])
            ->andFilterWhere(['like', 'ottoURL', $this->ottoURL])
            ->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'meta_description', $this->meta_description])
            ->andFilterWhere(['like', 'meta_keywords', $this->meta_keywords])
            ->andFilterWhere(['like', 'TieUp', $this->TieUp])
            ->andFilterWhere(['like', 'ClosedDays', $this->ClosedDays])
            ->andFilterWhere(['like', 'ContactPerson', $this->ContactPerson])
            ->andFilterWhere(['like', 'ContactNo1', $this->ContactNo1])
            ->andFilterWhere(['like', 'ContactNo2', $this->ContactNo2])
            ->andFilterWhere(['like', 'ContactPerEmail', $this->ContactPerEmail])
            ->andFilterWhere(['like', 'PaymentMode', $this->PaymentMode])
            ->andFilterWhere(['like', 'CancellationPolicy', $this->CancellationPolicy])
            ->andFilterWhere(['like', 'Designer', $this->Designer])
            ->andFilterWhere(['like', 'PriceIncludes', $this->PriceIncludes])
            ->andFilterWhere(['like', 'PriceIncludes2', $this->PriceIncludes2])
            ->andFilterWhere(['like', 'PriceIncludes3', $this->PriceIncludes3])
            ->andFilterWhere(['like', 'PriceIncludes4', $this->PriceIncludes4])
            ->andFilterWhere(['like', 'PriceIncludes5', $this->PriceIncludes5])
            ->andFilterWhere(['like', 'CourseType', $this->CourseType])
            ->andFilterWhere(['like', 'cancelPolicy', $this->cancelPolicy])
            ->andFilterWhere(['like', 'courseDesigner', $this->courseDesigner]);

        return $dataProvider;
    }
}
