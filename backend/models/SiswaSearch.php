<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Siswa;
/**
 * SiswaSearch represents the model behind the search form about `app\models\Siswa`.
 */
class SiswaSearch extends Siswa
{
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSiswa', 'idKelas'], 'integer'],
            [['nomorInduk', 'password', 'nama', 'jurusan', 'telepon', 'email', 'alamat', 'kota', 'tglLahir', 'tempatLahir', 'jenisKelamin', 'agama', 'namaAyah', 'namaIbu', 'alamatOrtu', 'teleponOrtu', 'pekerjaanAyah', 'pekerjaanIbu'], 'safe'],
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
        $query = Siswa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'pagination' => array('pageSize' => 50),
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idSiswa' => $this->idSiswa,
            'idKelas' => $this->idKelas,
            'tglLahir' => $this->tglLahir,
        ]);

        $query->andFilterWhere(['like', 'nomorInduk', $this->nomorInduk])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jurusan', $this->jurusan])
            ->andFilterWhere(['like', 'telepon', $this->telepon])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kota', $this->kota])
            ->andFilterWhere(['like', 'tempatLahir', $this->tempatLahir])
            ->andFilterWhere(['like', 'jenisKelamin', $this->jenisKelamin])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'namaAyah', $this->namaAyah])
            ->andFilterWhere(['like', 'namaIbu', $this->namaIbu])
            ->andFilterWhere(['like', 'alamatOrtu', $this->alamatOrtu])
            ->andFilterWhere(['like', 'teleponOrtu', $this->teleponOrtu])
            ->andFilterWhere(['like', 'pekerjaanAyah', $this->pekerjaanAyah])
            ->andFilterWhere(['like', 'pekerjaanIbu', $this->pekerjaanIbu]);
		
        return $dataProvider;
    }
	
	
}
