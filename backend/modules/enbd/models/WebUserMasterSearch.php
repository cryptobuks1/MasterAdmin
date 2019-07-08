<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\WebUserMaster;

/**
 * WebUserMasterSearch represents the model behind the search form of `backend\modules\enbd\models\WebUserMaster`.
 */
class WebUserMasterSearch extends WebUserMaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['User_ID', 'mobileVerified', 'CardTypeID', 'Handicap'], 'integer'],
            [['Login_Name', 'Fname', 'Lname', 'Email', 'Mobile', 'City', 'ZipCode', 'Country', 'Address', 'Gender', 'CardNo', 'Emirates_card_no', 'PasswordHash', 'Password', 'RealPassword', 'HomeCourse', 'DOB'], 'safe'],
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
        $query = WebUserMaster::find();

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
            'User_ID' => $this->User_ID,
            'mobileVerified' => $this->mobileVerified,
            'CardTypeID' => $this->CardTypeID,
            'Handicap' => $this->Handicap,
            'DOB' => $this->DOB,
        ]);

        $query->andFilterWhere(['like', 'Login_Name', $this->Login_Name])
            ->andFilterWhere(['like', 'Fname', $this->Fname])
            ->andFilterWhere(['like', 'Lname', $this->Lname])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Mobile', $this->Mobile])
            ->andFilterWhere(['like', 'City', $this->City])
            ->andFilterWhere(['like', 'ZipCode', $this->ZipCode])
            ->andFilterWhere(['like', 'Country', $this->Country])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'CardNo', $this->CardNo])
            ->andFilterWhere(['like', 'Emirates_card_no', $this->Emirates_card_no])
            ->andFilterWhere(['like', 'PasswordHash', $this->PasswordHash])
            ->andFilterWhere(['like', 'Password', $this->Password])
            ->andFilterWhere(['like', 'RealPassword', $this->RealPassword])
            ->andFilterWhere(['like', 'HomeCourse', $this->HomeCourse]);

        return $dataProvider;
    }
}
