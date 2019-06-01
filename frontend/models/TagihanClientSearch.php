<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TagihanClient;

/**
 * TagihanClientSearch represents the model behind the search form of `frontend\models\TagihanClient`.
 */
class TagihanClientSearch extends TagihanClient
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'contract_id', 'invoice_address', 'invoice_name', 'invoice_email', 'due_date', 'invoice_phone', 'create_date', 'create_by'], 'safe'],
            [['client_id', 'status', 'urutan'], 'integer'],
            [['nominal'], 'number'],
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
        $query = TagihanClient::find();

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
            'client_id' => $this->client_id,
            'nominal' => $this->nominal,
            'due_date' => $this->due_date,
            'create_date' => $this->create_date,
            'status' => $this->status,
            'urutan' => $this->urutan,
        ]);

        $query->andFilterWhere(['like', 'invoice_id', $this->invoice_id])
            ->andFilterWhere(['like', 'contract_id', $this->contract_id])
            ->andFilterWhere(['like', 'invoice_address', $this->invoice_address])
            ->andFilterWhere(['like', 'invoice_name', $this->invoice_name])
            ->andFilterWhere(['like', 'invoice_email', $this->invoice_email])
            ->andFilterWhere(['like', 'invoice_phone', $this->invoice_phone])
            ->andFilterWhere(['like', 'create_by', $this->create_by]);

        return $dataProvider;
    }
}
