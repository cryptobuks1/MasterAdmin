<?php

namespace backend\modules\scbuae\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\scbuae\models\CustomerCareExecutiveActivityLog;

/**
 * CustomerCareExecutiveActivityLogSearch represents the model behind the search form of `backend\modules\scbuae\models\CustomerCareExecutiveActivityLog`.
 */
class CustomerCareExecutiveActivityLogSearch extends CustomerCareExecutiveActivityLog
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CustomerCareExecutiveActivityLogId', 'CustomerCareExecutiveId', 'IsActive'], 'integer'],
            [['LoginDateTime', 'LogoutDateTime', 'OperatingSystem', 'Browser', 'IP', 'LastUpdated', 'CreatedOn'], 'safe'],
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
        $query = CustomerCareExecutiveActivityLog::find();

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
            'CustomerCareExecutiveActivityLogId' => $this->CustomerCareExecutiveActivityLogId,
            'CustomerCareExecutiveId' => $this->CustomerCareExecutiveId,
            'LoginDateTime' => $this->LoginDateTime,
            'LogoutDateTime' => $this->LogoutDateTime,
            'IsActive' => $this->IsActive,
            'LastUpdated' => $this->LastUpdated,
            'CreatedOn' => $this->CreatedOn,
        ]);

        $query->andFilterWhere(['like', 'OperatingSystem', $this->OperatingSystem])
            ->andFilterWhere(['like', 'Browser', $this->Browser])
            ->andFilterWhere(['like', 'IP', $this->IP]);

        return $dataProvider;
    }
}
