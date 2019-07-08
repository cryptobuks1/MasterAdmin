<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\FourBallMaster;

/**
 * FourBallMasterSearch represents the model behind the search form of `backend\modules\enbd\models\FourBallMaster`.
 */
class FourBallMasterSearch extends FourBallMaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fourBallID', 'BookID', 'bookedByUserID'], 'integer'],
            [['fourBallName', 'fourBallEmail', 'fourBallPhoneNum', 'cdate'], 'safe'],
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
        $query = FourBallMaster::find();

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
            'fourBallID' => $this->fourBallID,
            'BookID' => $this->BookID,
            'bookedByUserID' => $this->bookedByUserID,
            'cdate' => $this->cdate,
        ]);

        $query->andFilterWhere(['like', 'fourBallName', $this->fourBallName])
            ->andFilterWhere(['like', 'fourBallEmail', $this->fourBallEmail])
            ->andFilterWhere(['like', 'fourBallPhoneNum', $this->fourBallPhoneNum]);

        return $dataProvider;
    }
}
