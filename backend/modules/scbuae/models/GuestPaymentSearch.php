<?php

namespace backend\modules\scbuae\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\scbuae\models\GuestPayment;

/**
 * GuestPaymentSearch represents the model behind the search form of `backend\modules\scbuae\models\GuestPayment`.
 */
class GuestPaymentSearch extends GuestPayment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GuestPaymentId', 'CustomerCareExecutiveId', 'GuestPaymentStatusId', 'IsActive'], 'integer'],
            [['PaymentGatewayOrderId', 'Amount', 'CurrencyCode', 'PaymentDate', 'LastUpdated', 'CreatedOn'], 'safe'],
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
        $query = GuestPayment::find();

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
            'GuestPaymentId' => $this->GuestPaymentId,
            'PaymentDate' => $this->PaymentDate,
            'CustomerCareExecutiveId' => $this->CustomerCareExecutiveId,
            'GuestPaymentStatusId' => $this->GuestPaymentStatusId,
            'IsActive' => $this->IsActive,
            'LastUpdated' => $this->LastUpdated,
            'CreatedOn' => $this->CreatedOn,
        ]);

        $query->andFilterWhere(['like', 'PaymentGatewayOrderId', $this->PaymentGatewayOrderId])
            ->andFilterWhere(['like', 'Amount', $this->Amount])
            ->andFilterWhere(['like', 'CurrencyCode', $this->CurrencyCode]);

        return $dataProvider;
    }
}
