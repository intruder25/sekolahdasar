<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SiswaBaru;

/**
 * SiswaBaruSearch represents the model behind the search form about `app\models\SiswaBaru`.
 */
class SiswaBaruSearch extends SiswaBaru
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nomorPendaftaran', 'password', 'email', 'nama', 'telepon', 'alamat', 'kota', 'tglLahir', 'tempatLahir', 'jenisKelamin', 'agama', 'namaAyah', 'namaIbu', 'alamatOrtu', 'teleponOrtu', 'pekerjaanAyah', 'pekerjaanIbu', 'sekolahAsal', 'statusTerima', 'nomorIjazah', 'nomorTranskrip', 'fileIjazah', 'fileTranskrip', 'filePhoto'], 'safe'],
            [['nilaiUn', 'nilaiUm', 'nilaiPrestasi'], 'number'],
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
        $query = SiswaBaru::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tglLahir' => $this->tglLahir,
            'nilaiUn' => $this->nilaiUn,
            'nilaiUm' => $this->nilaiUm,
            'nilaiPrestasi' => $this->nilaiPrestasi,
        ]);

        $query->andFilterWhere(['like', 'nomorPendaftaran', $this->nomorPendaftaran])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'telepon', $this->telepon])
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
            ->andFilterWhere(['like', 'pekerjaanIbu', $this->pekerjaanIbu])
            ->andFilterWhere(['like', 'sekolahAsal', $this->sekolahAsal])
            ->andFilterWhere(['like', 'statusTerima', $this->statusTerima])
            ->andFilterWhere(['like', 'nomorIjazah', $this->nomorIjazah])
            ->andFilterWhere(['like', 'nomorTranskrip', $this->nomorTranskrip])
            ->andFilterWhere(['like', 'fileIjazah', $this->fileIjazah])
            ->andFilterWhere(['like', 'fileTranskrip', $this->fileTranskrip])
            ->andFilterWhere(['like', 'filePhoto', $this->filePhoto]);

        return $dataProvider;
    }
}
