<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\GolfcourseMaxBook;

/**
 * GolfcourseMaxBookSearch represents the model behind the search form of `backend\modules\enbd\models\GolfcourseMaxBook`.
 */
class GolfcourseMaxBookSearch extends GolfcourseMaxBook
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'GID', 'MaxbookCount', 'Status'], 'integer'],
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
        $query = GolfcourseMaxBook::find();

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
            'Id' => $this->Id,
            'GID' => $this->GID,
            'MaxbookCount' => $this->MaxbookCount,
            'Status' => $this->Status,
        ]);

        return $dataProvider;
    }
}
