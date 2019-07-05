<?php

namespace backend\modules\scbuae\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\scbuae\models\GuestPaymentStatus;

/**
 * GuestPaymentStatusSearch represents the model behind the search form of `backend\modules\scbuae\models\GuestPaymentStatus`.
 */
class GuestPaymentStatusSearch extends GuestPaymentStatus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GuestPaymentStatusId', 'isActive'], 'integer'],
            [['Status', 'TextToDisplay', 'LastUpdated', 'CreatedOn'], 'safe'],
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
        $query = GuestPaymentStatus::find();

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
            'GuestPaymentStatusId' => $this->GuestPaymentStatusId,
            'isActive' => $this->isActive,
            'LastUpdated' => $this->LastUpdated,
            'CreatedOn' => $this->CreatedOn,
        ]);

        $query->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'TextToDisplay', $this->TextToDisplay]);

        return $dataProvider;
    }
}
