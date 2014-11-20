<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property integer $id
 * @property string $nomorInduk
 * @property string $password
 * @property string $nama
 * @property string $jurusan
 * @property integer $idKelas
 * @property string $telepon
 * @property string $email
 * @property string $alamat
 * @property string $kota
 * @property string $tglLahir
 * @property string $tempatLahir
 * @property string $jenisKelamin
 * @property string $agama
 * @property string $namaAyah
 * @property string $namaIbu
 * @property string $alamatOrtu
 * @property string $teleponOrtu
 * @property string $pekerjaanAyah
 * @property string $pekerjaanIbu
 *
 * @property Kelas $idKelas0
 */
class Siswa extends \yii\db\ActiveRecord
{
	
	public $maxId=0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idKelas'], 'integer'],
            [['tglLahir'], 'safe'],
            [['jenisKelamin'], 'string'],
            [['nomorInduk', 'agama'], 'string', 'max' => 50],
            [['password', 'alamat', 'alamatOrtu'], 'string', 'max' => 255],
            [['nama', 'namaAyah', 'namaIbu', 'pekerjaanAyah', 'pekerjaanIbu'], 'string', 'max' => 150],
            [['jurusan'], 'string', 'max' => 20],
            [['telepon'], 'string', 'max' => 35],
            [['email', 'kota', 'tempatLahir'], 'string', 'max' => 100],
            [['teleponOrtu'], 'string', 'max' => 45],
            [['nomorInduk'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id Siswa',
            'nomorInduk' => 'Nomor Induk Siswa',
            'password' => 'Password',
            'nama' => 'Nama Siswa',
            'jurusan' => 'Jurusan',
            'idKelas' => 'Id Kelas',
            'telepon' => 'Telepon',
            'email' => 'Email',
            'alamat' => 'Alamat tempat tinggal',
            'kota' => 'Kota tempat tinggal',
            'tglLahir' => 'Tanggal lahir',
            'tempatLahir' => 'Tempat kelahiran',
            'jenisKelamin' => 'Jenis kelamin',
            'agama' => 'Agama',
            'namaAyah' => 'Nama ayah siswa',
            'namaIbu' => 'Nama ibu siswa',
            'alamatOrtu' => 'Alamat orang tua',
            'teleponOrtu' => 'Telepon orang tua',
            'pekerjaanAyah' => 'Pekerjaan ayah',
            'pekerjaanIbu' => 'Pekerjaan ibu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKelas0()
    {
        return $this->hasOne(Kelas::className(), ['idKelas' => 'idKelas']);
    }
	
	public function getNim(){
		/// year-idsiswa
		$yy = date('y');
		$_idSiswa = $this->findBySql('SELECT max(id) as maxId FROM '.self::tableName())->all();
		//print_r($_idSiswa[0]);
		$idSiswa = 0;
		$idSiswa = $_idSiswa[0]['maxId']+1;
		
		return $yy.'-'.str_pad($idSiswa,5,'0',STR_PAD_LEFT);
	}
}


