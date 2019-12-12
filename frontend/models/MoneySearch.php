<?php

namespace frontend\models;
use yii\helpers\Html;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Money;
use frontend\controllers\SiteController;
/**
 * MoneySearch represents the model behind the search form of `app\models\Money`.
 */


class MoneySearch extends Money
{
   public $nameL;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'total'], 'integer'],
            [['username', 'currency', 'timers'], 'safe'],
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
        $query = Money::find();

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
        // $query->andWhere([
        //     'username' => $nameL,
        // ]);
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'total' => $this->total,
            'timers' => $this->timers,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'currency', $this->currency]);

        return $dataProvider;
    }
}
