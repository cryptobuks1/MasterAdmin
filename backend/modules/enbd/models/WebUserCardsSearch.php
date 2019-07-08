<?php

namespace backend\modules\enbd\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\enbd\models\WebUserCards;

/**
 * WebUserCardsSearch represents the model behind the search form of `backend\modules\enbd\models\WebUserCards`.
 */
class WebUserCardsSearch extends WebUserCards
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'User_ID', 'CardTypeID', 'isDiscountAllowed', 'AvlCompGames', 'AvlLearnSessions', 'AvlAssistSessions', 'AvlGlobalSessions', 'AvlTrophyGames', 'AvlPNRGames', 'AvlTrophyPGames', 'isActive', 'isFlexiUser', 'enbdVerified'], 'integer'],
            [['CardNo', 'CardName', 'ValidFrom', 'ValidTill', 'DateAdded', 'ActivatedOn', 'RenewedOn', 'CountryOrigin'], 'safe'],
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
        $query = WebUserCards::find();

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
            'User_ID' => $this->User_ID,
            'CardTypeID' => $this->CardTypeID,
            'ValidFrom' => $this->ValidFrom,
            'ValidTill' => $this->ValidTill,
            'isDiscountAllowed' => $this->isDiscountAllowed,
            'AvlCompGames' => $this->AvlCompGames,
            'AvlLearnSessions' => $this->AvlLearnSessions,
            'AvlAssistSessions' => $this->AvlAssistSessions,
            'AvlGlobalSessions' => $this->AvlGlobalSessions,
            'AvlTrophyGames' => $this->AvlTrophyGames,
            'AvlPNRGames' => $this->AvlPNRGames,
            'AvlTrophyPGames' => $this->AvlTrophyPGames,
            'isActive' => $this->isActive,
            'isFlexiUser' => $this->isFlexiUser,
            'DateAdded' => $this->DateAdded,
            'ActivatedOn' => $this->ActivatedOn,
            'RenewedOn' => $this->RenewedOn,
            'enbdVerified' => $this->enbdVerified,
        ]);

        $query->andFilterWhere(['like', 'CardNo', $this->CardNo])
            ->andFilterWhere(['like', 'CardName', $this->CardName])
            ->andFilterWhere(['like', 'CountryOrigin', $this->CountryOrigin]);

        return $dataProvider;
    }
}
