<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\BinNumbers;

/**
 * BinNumbersSearch represents the model behind the search form of `backend\modules\enbd\models\BinNumbers`.
 */
class BinNumbersSearch extends BinNumbers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bin_id', 'bin_number', 'comp_games', 'isDiscountAllowed', 'isFlexiUser'], 'integer'],
            [['CardName'], 'safe'],
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
        $query = BinNumbers::find();

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
            'bin_id' => $this->bin_id,
            'bin_number' => $this->bin_number,
            'comp_games' => $this->comp_games,
            'isDiscountAllowed' => $this->isDiscountAllowed,
            'isFlexiUser' => $this->isFlexiUser,
        ]);

        $query->andFilterWhere(['like', 'CardName', $this->CardName]);

        return $dataProvider;
    }
}
