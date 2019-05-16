<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Spg;

/**
 * SpgSearch represents the model behind the search form of `frontend\models\Spg`.
 */
class SpgSearch extends Spg
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'high', 'weight', 'verified', 'active_work', 'status'], 'integer'],
            [['city', 'bank_account', 'account_number', 'username', 'first_name', 'last_name', 'phone', 'email', 'address', 'description', 'ktp', 'bod', 'language', 'face', 'auth_key', 'password', 'created_at', 'updated_at'], 'safe'],
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
        $query = Spg::find();

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
            'bod' => $this->bod,
            'high' => $this->high,
            'weight' => $this->weight,
            'verified' => $this->verified,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'active_work' => $this->active_work,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'bank_account', $this->bank_account])
            ->andFilterWhere(['like', 'account_number', $this->account_number])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'ktp', $this->ktp])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'face', $this->face])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
