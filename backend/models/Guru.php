<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guru".
 *
 * @property integer $id
 * @property string $NIP
 * @property string $namaGuru
 * @property integer $idPelajaran
 * @property string $filePhoto
 * @property string $alamat
 * @property string $telepon
 * @property string $tglLahir
 * @property string $tempatLahir
 * @property string $jenisKelamin
 * @property string $agama
 * @property string $statusAktif
 */
class Guru extends \yii\db\ActiveRecord
{
	
	public $photoGuru;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
			[['photoGuru'],'safe'],
			[['photoGuru'],'file','extensions'=>'jpg, png, jpeg'],
            [['idPelajaran'], 'integer'],
            [['tglLahir'], 'safe'],
            [['jenisKelamin', 'statusAktif'], 'string'],
            [['NIP', 'telepon'], 'string', 'max' => 45],
            [['namaGuru'], 'string', 'max' => 100],
            [['filePhoto'], 'string', 'max' => 200],
            [['alamat'], 'string', 'max' => 255],
            [['tempatLahir'], 'string', 'max' => 70],
            [['agama'], 'string', 'max' => 35],
            [['NIP'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'NIP' => 'Nip',
            'namaGuru' => 'Nama Guru',
            'idPelajaran' => 'Id Pelajaran',
            'filePhoto' => 'File Photo',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'tglLahir' => 'Tgl Lahir',
            'tempatLahir' => 'Tempat Lahir',
            'jenisKelamin' => 'Jenis Kelamin',
            'agama' => 'Agama',
            'statusAktif' => 'Status Aktif',
        ];
    }
	
	public function getPelajaran()
    {
        return $this->hasOne(Pelajaran::className(), ['id' => 'idPelajaran']);
    }
	
	public function getPhotoGuruUrl()
	{
		return \Yii::$app->request->BaseUrl.'/images/guru/'.$this->filePhoto;
	}
	
}
