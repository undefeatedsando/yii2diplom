<?php

namespace frontend\models\forms;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\forms\UserdataForm;

/**
 * UserdataFormSearch represents the model behind the search form of `frontend\models\forms\UserdataForm`.
 */
class UserdataFormSearch extends UserdataForm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'carousel'], 'integer'],
            [['name', 'family_name', 'father_name', 'city', 'website', 'about', 'avatar', 'subscribeEnd', 'url_1c_base'], 'safe'],
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
        $query = UserdataForm::find();

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
            'subscribeEnd' => $this->subscribeEnd,
            'carousel' => $this->carousel,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'family_name', $this->family_name])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'about', $this->about])
            ->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'url_1c_base', $this->url_1c_base]);

        return $dataProvider;
    }
}
