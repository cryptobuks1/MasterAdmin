<?php

namespace backend\modules\amex\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\amex\models\BookingMaster;

/**
 * BookingMasterSearch represents the model behind the search form of `backend\modules\amex\models\BookingMaster`.
 */
class BookingMasterSearch extends BookingMaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bookingID', 'GID', 'numOfGolfers', 'customerID', 'bookingStatus', 'isEscalated', 'outOfTAT', 'cancellationReasonID', 'isActive', 'createdBy'], 'integer'],
            [['dateOfPlay', 'dateOfBooking', 'preferredTimeOfPlay', 'timeOfPlay1', 'timeOfPlay2', 'confirmedTimeOfPlay', 'ConfirmDateTime', 'cancellationReason', 'referenceNum', 'comment', 'conciergeRemarks', 'isosRemarks', 'golflanRemarks', 'masterRemarks', 'createdOn', 'lastUpdated'], 'safe'],
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
        $query = BookingMaster::find();

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
            'bookingID' => $this->bookingID,
            'GID' => $this->GID,
            'dateOfPlay' => $this->dateOfPlay,
            'dateOfBooking' => $this->dateOfBooking,
            'preferredTimeOfPlay' => $this->preferredTimeOfPlay,
            'numOfGolfers' => $this->numOfGolfers,
            'customerID' => $this->customerID,
            'bookingStatus' => $this->bookingStatus,
            'ConfirmDateTime' => $this->ConfirmDateTime,
            'isEscalated' => $this->isEscalated,
            'outOfTAT' => $this->outOfTAT,
            'cancellationReasonID' => $this->cancellationReasonID,
            'isActive' => $this->isActive,
            'createdOn' => $this->createdOn,
            'lastUpdated' => $this->lastUpdated,
            'createdBy' => $this->createdBy,
        ]);

        $query->andFilterWhere(['like', 'timeOfPlay1', $this->timeOfPlay1])
            ->andFilterWhere(['like', 'timeOfPlay2', $this->timeOfPlay2])
            ->andFilterWhere(['like', 'confirmedTimeOfPlay', $this->confirmedTimeOfPlay])
            ->andFilterWhere(['like', 'cancellationReason', $this->cancellationReason])
            ->andFilterWhere(['like', 'referenceNum', $this->referenceNum])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'conciergeRemarks', $this->conciergeRemarks])
            ->andFilterWhere(['like', 'isosRemarks', $this->isosRemarks])
            ->andFilterWhere(['like', 'golflanRemarks', $this->golflanRemarks])
            ->andFilterWhere(['like', 'masterRemarks', $this->masterRemarks]);

        return $dataProvider;
    }
}
