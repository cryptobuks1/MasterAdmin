<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\NoShowPenality;

/**
 * NoShowPenalitySearch represents the model behind the search form of `backend\modules\enbd\models\NoShowPenality`.
 */
class NoShowPenalitySearch extends NoShowPenality
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['penalityID', 'penalityAmount', 'payStatus'], 'integer'],
            [['bookingIDS', 'insertDateTime', 'updateDateTime'], 'safe'],
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
        $query = NoShowPenality::find();

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
            'penalityID' => $this->penalityID,
            'penalityAmount' => $this->penalityAmount,
            'payStatus' => $this->payStatus,
            'insertDateTime' => $this->insertDateTime,
            'updateDateTime' => $this->updateDateTime,
        ]);

        $query->andFilterWhere(['like', 'bookingIDS', $this->bookingIDS]);

        return $dataProvider;
    }
}
