<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\backend\models\Constituencies;

/**
 * ConstituenciesSearch represents the model behind the search form of `app\backend\models\Constituencies`.
 */
class ConstituenciesSearch extends Constituencies
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'district_id', 'current_member', 'previous_member', 'current_party', 'created_at', 'updated_at'], 'integer'],
            [['name', 'current_member_name', 'previous_member_name', 'slug'], 'safe'],
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
        $query = Constituencies::find();

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
            'district_id' => $this->district_id,
            'current_member' => $this->current_member,
            'previous_member' => $this->previous_member,
            'current_party' => $this->current_party,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'current_member_name', $this->current_member_name])
            ->andFilterWhere(['like', 'previous_member_name', $this->previous_member_name])
            ->andFilterWhere(['like', 'slug', $this->slug]);

        return $dataProvider;
    }
}
