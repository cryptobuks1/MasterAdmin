<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\UserPasswordReset;

/**
 * UserPasswordResetSearch represents the model behind the search form of `backend\modules\enbd\models\UserPasswordReset`.
 */
class UserPasswordResetSearch extends UserPasswordReset
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['upr_id', 'user_id', 'status'], 'integer'],
            [['resetkey', 'cdate', 'udate'], 'safe'],
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
        $query = UserPasswordReset::find();

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
            'upr_id' => $this->upr_id,
            'user_id' => $this->user_id,
            'cdate' => $this->cdate,
            'udate' => $this->udate,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'resetkey', $this->resetkey]);

        return $dataProvider;
    }
}
