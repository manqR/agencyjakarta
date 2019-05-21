<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PembayaranClient;

/**
 * PembayaranClientSearch represents the model behind the search form of `frontend\models\PembayaranClient`.
 */
class PembayaranClientSearch extends PembayaranClient
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payment_number', 'account_name', 'urutan'], 'integer'],
            [['invoice_id', 'payment_menthod', 'bank_name', 'payment_date', 'prove_file', 'create_date', 'create_by'], 'safe'],
            [['nominal'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = PembayaranClient::find();

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
            'payment_number' => $this->payment_number,
            'account_name' => $this->account_name,
            'payment_date' => $this->payment_date,
            'nominal' => $this->nominal,
            'create_date' => $this->create_date,
            'urutan' => $this->urutan,
        ]);

        $query->andFilterWhere(['like', 'invoice_id', $this->invoice_id])
            ->andFilterWhere(['like', 'payment_menthod', $this->payment_menthod])
            ->andFilterWhere(['like', 'bank_name', $this->bank_name])
            ->andFilterWhere(['like', 'prove_file', $this->prove_file])
            ->andFilterWhere(['like', 'create_by', $this->create_by]);

        return $dataProvider;
    }
}
