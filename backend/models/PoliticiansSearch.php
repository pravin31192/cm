<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Politicians;

/**
 * PoliticiansSearch represents the model behind the search form of `app\models\Politicians`.
 */
class PoliticiansSearch extends Politicians
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'constituency', 'district', 'state', 'current_party', 'previous_party', 'active_from', 'created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name', 'street', 'party_name', 'previous_party_name', 'mobile_no', 'personal_email_id', 'official_email_id', 'fb_profile', 'twitter_profile', 'profile_photo'], 'safe'],
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
        $query = Politicians::find();

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
            'constituency' => $this->constituency,
            'district' => $this->district,
            'state' => $this->state,
            'current_party' => $this->current_party,
            'previous_party' => $this->previous_party,
            'active_from' => $this->active_from,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'party_name', $this->party_name])
            ->andFilterWhere(['like', 'previous_party_name', $this->previous_party_name])
            ->andFilterWhere(['like', 'mobile_no', $this->mobile_no])
            ->andFilterWhere(['like', 'personal_email_id', $this->personal_email_id])
            ->andFilterWhere(['like', 'official_email_id', $this->official_email_id])
            ->andFilterWhere(['like', 'fb_profile', $this->fb_profile])
            ->andFilterWhere(['like', 'twitter_profile', $this->twitter_profile])
            ->andFilterWhere(['like', 'profile_photo', $this->profile_photo]);

        return $dataProvider;
    }
}
