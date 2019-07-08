<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\ConvertCurrency;

/**
 * ConvertCurrencySearch represents the model behind the search form of `backend\modules\enbd\models\ConvertCurrency`.
 */
class ConvertCurrencySearch extends ConvertCurrency
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['currID'], 'integer'],
            [['CurrencyISO', 'BaseCurrency', 'DateTimeUpdated'], 'safe'],
            [['Rate'], 'number'],
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
        $query = ConvertCurrency::find();

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
            'currID' => $this->currID,
            'Rate' => $this->Rate,
            'DateTimeUpdated' => $this->DateTimeUpdated,
        ]);

        $query->andFilterWhere(['like', 'CurrencyISO', $this->CurrencyISO])
            ->andFilterWhere(['like', 'BaseCurrency', $this->BaseCurrency]);

        return $dataProvider;
    }
}
