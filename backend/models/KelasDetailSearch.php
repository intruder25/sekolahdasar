<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KelasDetail;

/**
 * KelasDetailSearch represents the model behind the search form about `app\models\KelasDetail`.
 */
class KelasDetailSearch extends KelasDetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idKelas', 'idGuru', 'idTahunAjaran'], 'integer'],
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
        $query = KelasDetail::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'idKelas' => $this->idKelas,
            'idGuru' => $this->idGuru,
            'idTahunAjaran' => $this->idTahunAjaran,
        ]);

        return $dataProvider;
    }
}
