<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kelas;

/**
 * KelasSearch represents the model behind the search form about `app\models\Kelas`.
 */
class KelasSearch extends Kelas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jurusan', 'kapasitas'], 'integer'],
            [['tingkat', 'namaKelas', 'statusAktif'], 'safe'],
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
        $query = Kelas::find();
		
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idKelas' => $this->idKelas,
            'jurusan' => $this->jurusan,
            'kapasitas' => $this->kapasitas,
        ]);

        $query->andFilterWhere(['like', 'tingkat', $this->tingkat])
            ->andFilterWhere(['like', 'namaKelas', $this->namaKelas])
            ->andFilterWhere(['like', 'statusAktif', $this->statusAktif]);

        return $dataProvider;
    }
}
