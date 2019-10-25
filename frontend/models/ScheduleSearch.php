<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Schedule;

/**
 * ScheduleSearch represents the model behind the search form of `frontend\models\Schedule`.
 */
class ScheduleSearch extends Schedule
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contract_id', 'event_id', 'limit', 'status', 'urutan'], 'integer'],
            [['date_period', 'time_period', 'created_date', 'created_by'], 'safe'],
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
        $query = Schedule::find();

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
            'contract_id' => $this->contract_id,
            'event_id' => $this->event_id,
            'date_period' => $this->date_period,
            'limit' => $this->limit,
            'status' => $this->status,
            'created_date' => $this->created_date,
            'urutan' => $this->urutan,
        ]);

        $query->andFilterWhere(['like', 'time_period', $this->time_period])
            ->andFilterWhere(['like', 'created_by', $this->created_by]);

        return $dataProvider;
    }
}
