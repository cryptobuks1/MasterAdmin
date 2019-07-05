<?php

namespace backend\modules\scbuae\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\scbuae\models\CustomerCareExecutive;

/**
 * CustomerCareExecutiveSearch represents the model behind the search form of `backend\modules\scbuae\models\CustomerCareExecutive`.
 */
class CustomerCareExecutiveSearch extends CustomerCareExecutive
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CustomerCareExecutiveId', 'GenderId', 'IsActive'], 'integer'],
            [['FirstName', 'LastName', 'UserId', 'Email', 'Password', 'LastUpdated', 'CreatedOn'], 'safe'],
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
        $query = CustomerCareExecutive::find();

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
            'CustomerCareExecutiveId' => $this->CustomerCareExecutiveId,
            'GenderId' => $this->GenderId,
            'IsActive' => $this->IsActive,
            'LastUpdated' => $this->LastUpdated,
            'CreatedOn' => $this->CreatedOn,
        ]);

        $query->andFilterWhere(['like', 'FirstName', $this->FirstName])
            ->andFilterWhere(['like', 'LastName', $this->LastName])
            ->andFilterWhere(['like', 'UserId', $this->UserId])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Password', $this->Password]);

        return $dataProvider;
    }
}
