<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pelajaran;

/**
 * PelajaranSearch represents the model behind the search form about `app\models\Pelajaran`.
 */
class PelajaranSearch extends Pelajaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'totalPertemuan'], 'integer'],
            [['jurusan', 'kodeMapel', 'namaPelajaran', 'semester', 'statusAktif'], 'safe'],
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
        $query = Pelajaran::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'totalPertemuan' => $this->totalPertemuan,
        ]);

        $query->andFilterWhere(['like', 'jurusan', $this->jurusan])
            ->andFilterWhere(['like', 'kodeMapel', $this->kodeMapel])
            ->andFilterWhere(['like', 'namaPelajaran', $this->namaPelajaran])
            ->andFilterWhere(['like', 'semester', $this->semester])
            ->andFilterWhere(['like', 'statusAktif', $this->statusAktif]);

        return $dataProvider;
    }
}
