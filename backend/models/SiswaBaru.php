<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "siswa_baru".
 *
 * @property integer $id
 * @property string $nomorPendaftaran
 * @property string $password
 * @property string $email
 * @property string $nama
 * @property string $telepon
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
 * @property string $sekolahAsal
 * @property double $nilaiUn
 * @property double $nilaiUm
 * @property double $nilaiPrestasi
 * @property string $statusTerima
 * @property string $nomorIjazah
 * @property string $nomorTranskrip
 * @property string $fileIjazah
 * @property string $fileTranskrip
 * @property string $filePhoto
 */
class SiswaBaru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siswa_baru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomorPendaftaran', 'password', 'email', 'nama', 'telepon', 'alamat', 'kota', 'tglLahir', 'tempatLahir', 'jenisKelamin', 'namaAyah', 'namaIbu', 'alamatOrtu', 'teleponOrtu', 'sekolahAsal', 'nilaiUn', 'nomorIjazah', 'fileIjazah', 'fileTranskrip', 'filePhoto'], 'required'],
            [['tglLahir'], 'safe'],
            [['jenisKelamin', 'statusTerima'], 'string'],
            [['nilaiUn', 'nilaiUm', 'nilaiPrestasi'], 'number'],
            [['nomorPendaftaran', 'agama'], 'string', 'max' => 50],
            [['password', 'alamat', 'alamatOrtu'], 'string', 'max' => 255],
            [['email', 'kota', 'tempatLahir', 'nomorIjazah', 'nomorTranskrip'], 'string', 'max' => 100],
            [['nama', 'namaAyah', 'namaIbu', 'pekerjaanAyah', 'pekerjaanIbu', 'fileIjazah', 'fileTranskrip', 'filePhoto'], 'string', 'max' => 150],
            [['telepon'], 'string', 'max' => 35],
            [['teleponOrtu'], 'string', 'max' => 45],
            [['sekolahAsal'], 'string', 'max' => 140],
            [['nomorPendaftaran'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomorPendaftaran' => 'Nomor Pendaftaran',
            'password' => 'Password',
            'email' => 'Email',
            'nama' => 'Nama',
            'telepon' => 'Telepon',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'tglLahir' => 'Tgl Lahir',
            'tempatLahir' => 'Tempat Lahir',
            'jenisKelamin' => 'Jenis Kelamin',
            'agama' => 'Agama',
            'namaAyah' => 'Nama Ayah',
            'namaIbu' => 'Nama Ibu',
            'alamatOrtu' => 'Alamat Ortu',
            'teleponOrtu' => 'Telepon Ortu',
            'pekerjaanAyah' => 'Pekerjaan Ayah',
            'pekerjaanIbu' => 'Pekerjaan Ibu',
            'sekolahAsal' => 'Sekolah Asal',
            'nilaiUn' => 'Nilai Un',
            'nilaiUm' => 'Nilai Um',
            'nilaiPrestasi' => 'Nilai Prestasi',
            'statusTerima' => 'Status Terima',
            'nomorIjazah' => 'Nomor Ijazah',
            'nomorTranskrip' => 'Nomor Transkrip',
            'fileIjazah' => 'File Ijazah',
            'fileTranskrip' => 'File Transkrip',
            'filePhoto' => 'File Photo',
        ];
    }
}
