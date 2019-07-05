<?php

namespace backend\modules\scbuae\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\scbuae\models\Golfer;

/**
 * GolferSearch represents the model behind the search form of `backend\modules\scbuae\models\Golfer`.
 */
class GolferSearch extends Golfer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GolferId', 'Handicap', 'IsActive'], 'integer'],
            [['FirstName', 'LastName', 'DateOfBirth', 'Email', 'country', 'passwordHash', 'Mobile', 'Last8Digits', 'LastUpdated', 'CreatedOn'], 'safe'],
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
        $query = Golfer::find();

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
            'GolferId' => $this->GolferId,
            'DateOfBirth' => $this->DateOfBirth,
            'Handicap' => $this->Handicap,
            'IsActive' => $this->IsActive,
            'LastUpdated' => $this->LastUpdated,
            'CreatedOn' => $this->CreatedOn,
        ]);

        $query->andFilterWhere(['like', 'FirstName', $this->FirstName])
            ->andFilterWhere(['like', 'LastName', $this->LastName])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'passwordHash', $this->passwordHash])
            ->andFilterWhere(['like', 'Mobile', $this->Mobile])
            ->andFilterWhere(['like', 'Last8Digits', $this->Last8Digits]);

        return $dataProvider;
    }
}
