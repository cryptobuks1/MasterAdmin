<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\CountryList;

/**
 * CountryListSearch represents the model behind the search form of `backend\modules\enbd\models\CountryList`.
 */
class CountryListSearch extends CountryList
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_countries', 'iso_numeric', 'isActive', 'paymntEngine'], 'integer'],
            [['name', 'iso_alpha2', 'iso_alpha3', 'currency_code', 'currency_name', 'currrency_symbol', 'preferred_currrency', 'flag', 'isdCode'], 'safe'],
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
        $query = CountryList::find();

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
            'id_countries' => $this->id_countries,
            'iso_numeric' => $this->iso_numeric,
            'isActive' => $this->isActive,
            'paymntEngine' => $this->paymntEngine,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'iso_alpha2', $this->iso_alpha2])
            ->andFilterWhere(['like', 'iso_alpha3', $this->iso_alpha3])
            ->andFilterWhere(['like', 'currency_code', $this->currency_code])
            ->andFilterWhere(['like', 'currency_name', $this->currency_name])
            ->andFilterWhere(['like', 'currrency_symbol', $this->currrency_symbol])
            ->andFilterWhere(['like', 'preferred_currrency', $this->preferred_currrency])
            ->andFilterWhere(['like', 'flag', $this->flag])
            ->andFilterWhere(['like', 'isdCode', $this->isdCode]);

        return $dataProvider;
    }
}
