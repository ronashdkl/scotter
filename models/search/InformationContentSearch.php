<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InformationContent;

/**
 * InformationContentSearch represents the model behind the search form about `app\models\InformationContent`.
 */
class InformationContentSearch extends InformationContent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'information_id', 'description', 'lang'], 'integer'],
            [['name', 'heading'], 'safe'],
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
        $query = InformationContent::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'information_id' => $this->information_id,
            'description' => $this->description,
            'lang' => $this->lang,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'heading', $this->heading]);

        return $dataProvider;
    }
}
