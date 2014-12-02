<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Guru;

/**
 * GuruSearch represents the model behind the search form about `app\models\Guru`.
 */
class GuruSearch extends Guru
{
	public $pelajaran;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
			[['pelajaran'], 'safe'],
            [['id', 'idPelajaran'], 'integer'],
            [['NIP', 'namaGuru', 'filePhoto', 'alamat', 'telepon', 'tglLahir', 'tempatLahir', 'jenisKelamin', 'agama', 'statusAktif'], 'safe'],
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
        $query = Guru::find();
		
		
		$query->joinWith('pelajaran');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
		
		$dataProvider->sort->attributes['pelajaran'] = [
			// The tables are the ones our relation are configured to
			// in my case they are prefixed with "tbl_"
			'asc' => ['pelajaran.namaPelajaran' => SORT_ASC],
			'desc' => ['pelajaran.namaPelajaran' => SORT_DESC],
		];

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
		
        $query->andFilterWhere([
            'id' => $this->id,
            'idPelajaran' => $this->idPelajaran,
            'tglLahir' => $this->tglLahir,
        ]);

        $query->andFilterWhere(['like', 'NIP', $this->NIP])
            ->andFilterWhere(['like', 'namaGuru', $this->namaGuru])
            ->andFilterWhere(['like', 'filePhoto', $this->filePhoto])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'telepon', $this->telepon])
            ->andFilterWhere(['like', 'tempatLahir', $this->tempatLahir])
            ->andFilterWhere(['like', 'jenisKelamin', $this->jenisKelamin])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'statusAktif', $this->statusAktif])
			->andFilterWhere(['like', 'pelajaran.namaPelajaran', $this->pelajaran]);
        return $dataProvider;
    }
}
