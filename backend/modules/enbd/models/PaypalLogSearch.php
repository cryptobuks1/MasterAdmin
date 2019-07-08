<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\PaypalLog;

/**
 * PaypalLogSearch represents the model behind the search form of `backend\modules\enbd\models\PaypalLog`.
 */
class PaypalLogSearch extends PaypalLog
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['txn_id', 'log', 'posted_date'], 'safe'],
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
        $query = PaypalLog::find();

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
            'id' => $this->id,
            'posted_date' => $this->posted_date,
        ]);

        $query->andFilterWhere(['like', 'txn_id', $this->txn_id])
            ->andFilterWhere(['like', 'log', $this->log]);

        return $dataProvider;
    }
}
