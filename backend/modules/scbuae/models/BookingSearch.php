<?php

namespace backend\modules\scbuae\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\scbuae\models\Booking;

/**
 * BookingSearch represents the model behind the search form of `backend\modules\scbuae\models\Booking`.
 */
class BookingSearch extends Booking
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BookingId', 'CustomerCareExecutiveId', 'GolferId', 'GolfCourseId', 'TeeTimeId', 'NoOfGuest', 'Guest1Mobile', 'Guest1Handicap', 'Guest1MembershipNumber', 'Guest2Mobile', 'Guest2Handicap', 'Guest2MembershipNumber', 'Guest3Mobile', 'Guest3Handicap', 'Guest3MembershipNumber', 'BookingStatusId', 'OutOfTATStatus', 'IsActive'], 'integer'],
            [['ConfirmTeeTime', 'DateOfPlay', 'DateOfRequest', 'GuestPaymentId', 'Guest1Type', 'Guest1Name', 'Guest1Email', 'Guest2Type', 'Guest2Name', 'Guest2Email', 'Guest3Type', 'Guest3Name', 'Guest3Email', 'PaymentMethod', 'PaymentMethodComment', 'Comment', 'LastUpdated', 'CreatedOn'], 'safe'],
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
        $query = Booking::find()->orderBy([
            'IsActive' => SORT_ASC,
            //'item_no'=>SORT_ASC
          ]);

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
            'BookingId' => $this->BookingId,
            'CustomerCareExecutiveId' => $this->CustomerCareExecutiveId,
            'GolferId' => $this->GolferId,
            'GolfCourseId' => $this->GolfCourseId,
            'TeeTimeId' => $this->TeeTimeId,
            'DateOfPlay' => $this->DateOfPlay,
            'DateOfRequest' => $this->DateOfRequest,
            'NoOfGuest' => $this->NoOfGuest,
            'Guest1Mobile' => $this->Guest1Mobile,
            'Guest1Handicap' => $this->Guest1Handicap,
            'Guest1MembershipNumber' => $this->Guest1MembershipNumber,
            'Guest2Mobile' => $this->Guest2Mobile,
            'Guest2Handicap' => $this->Guest2Handicap,
            'Guest2MembershipNumber' => $this->Guest2MembershipNumber,
            'Guest3Mobile' => $this->Guest3Mobile,
            'Guest3Handicap' => $this->Guest3Handicap,
            'Guest3MembershipNumber' => $this->Guest3MembershipNumber,
            'BookingStatusId' => $this->BookingStatusId,
            'OutOfTATStatus' => $this->OutOfTATStatus,
            'IsActive' => $this->IsActive,
            'LastUpdated' => $this->LastUpdated,
            'CreatedOn' => $this->CreatedOn,
        ]);

        $query->andFilterWhere(['like', 'ConfirmTeeTime', $this->ConfirmTeeTime])
            ->andFilterWhere(['like', 'GuestPaymentId', $this->GuestPaymentId])
            ->andFilterWhere(['like', 'Guest1Type', $this->Guest1Type])
            ->andFilterWhere(['like', 'Guest1Name', $this->Guest1Name])
            ->andFilterWhere(['like', 'Guest1Email', $this->Guest1Email])
            ->andFilterWhere(['like', 'Guest2Type', $this->Guest2Type])
            ->andFilterWhere(['like', 'Guest2Name', $this->Guest2Name])
            ->andFilterWhere(['like', 'Guest2Email', $this->Guest2Email])
            ->andFilterWhere(['like', 'Guest3Type', $this->Guest3Type])
            ->andFilterWhere(['like', 'Guest3Name', $this->Guest3Name])
            ->andFilterWhere(['like', 'Guest3Email', $this->Guest3Email])
            ->andFilterWhere(['like', 'PaymentMethod', $this->PaymentMethod])
            ->andFilterWhere(['like', 'PaymentMethodComment', $this->PaymentMethodComment])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
