<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\OneTimePassword;

/**
 * OneTimePasswordSearch represents the model behind the search form of `backend\modules\enbd\models\OneTimePassword`.
 */
class OneTimePasswordSearch extends OneTimePassword
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OtpID', 'UserID', 'OTP', 'MID', 'isActive', 'Times'], 'integer'],
            [['CTime', 'ETime'], 'safe'],
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
        $query = OneTimePassword::find();

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
            'OtpID' => $this->OtpID,
            'UserID' => $this->UserID,
            'OTP' => $this->OTP,
            'MID' => $this->MID,
            'isActive' => $this->isActive,
            'CTime' => $this->CTime,
            'ETime' => $this->ETime,
            'Times' => $this->Times,
        ]);

        return $dataProvider;
    }
}
