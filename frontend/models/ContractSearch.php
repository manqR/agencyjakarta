<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Contract;

/**
 * ContractSearch represents the model behind the search form of `frontend\models\Contract`.
 */


class ContractSearch extends Contract
{
    /**
     * @inheritdoc
     */

    public $clientName;

    public function rules()
    {
        return [
            [['contract_id','clientName', 'cost', 'pic_name', 'pic_phone', 'pic_email', 'start_date', 'end_date', 'description', 'upload_file', 'created_date', 'created_by', 'update_date', 'update_by'], 'safe'],
            [['idclient', 'number_of_spg', 'contract_status', 'payment_status', 'urutan'], 'integer'],
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
        $query = Contract::find();
        $query->joinWith(['client']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        $dataProvider->sort->attributes['clientName']=[ 
			'asc'=>['client.name' => SORT_ASC],
			'desc'=>['client.name'=> SORT_DESC],
        ];

        $this->load($params);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }


        // grid filtering conditions
        $query->andFilterWhere([
            'idclient' => $this->idclient,
            'cost' => $this->cost,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'number_of_spg' => $this->number_of_spg,
            'contract_status' => $this->contract_status,
            'payment_status' => $this->payment_status,
            'created_date' => $this->created_date,
            'update_date' => $this->update_date,
            'urutan' => $this->urutan,
        ]);

        $query->andFilterWhere(['like', 'contract_id', $this->contract_id])
            ->andFilterWhere(['like', 'pic_name', $this->pic_name])
            ->andFilterWhere(['like', 'cost', $this->cost])
            ->andFilterWhere(['like', 'name', $this->clientName])
            ->andFilterWhere(['like', 'pic_phone', $this->pic_phone])
            ->andFilterWhere(['like', 'pic_email', $this->pic_email])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'upload_file', $this->upload_file])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'update_by', $this->update_by]);

        return $dataProvider;
    }
}
