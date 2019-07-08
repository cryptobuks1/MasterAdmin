<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\WeekDayBinNumbers;

/**
 * WeekDayBinNumbersSearch represents the model behind the search form of `backend\modules\enbd\models\WeekDayBinNumbers`.
 */
class WeekDayBinNumbersSearch extends WeekDayBinNumbers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SrNo', 'BinNumber', 'IsActive'], 'integer'],
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
        $query = WeekDayBinNumbers::find();

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
            'SrNo' => $this->SrNo,
            'BinNumber' => $this->BinNumber,
            'IsActive' => $this->IsActive,
        ]);

        return $dataProvider;
    }
}
