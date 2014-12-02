<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelajaran".
 *
 * @property integer $id
 * @property string $jurusan
 * @property string $kodeMapel
 * @property string $namaPelajaran
 * @property integer $totalPertemuan
 * @property string $semester
 * @property string $statusAktif
 */
class Pelajaran extends \yii\db\ActiveRecord
{
	public $maxId;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelajaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jurusan'], 'required'],
            [['totalPertemuan'], 'integer'],
            [['semester', 'statusAktif'], 'string'],
            [['jurusan'], 'string', 'max' => 11],
            [['kodeMapel'], 'string', 'max' => 20],
            [['namaPelajaran'], 'string', 'max' => 45],
            [['kodeMapel'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jurusan' => 'Jurusan',
            'kodeMapel' => 'Kode Mapel',
            'namaPelajaran' => 'Nama Pelajaran',
            'totalPertemuan' => 'Total Pertemuan',
            'semester' => 'Semester',
            'statusAktif' => 'Status Aktif',
        ];
    }
	
	public function newKodeMapel(){
		if($this->isNewRecord){
			$lasIdMapel = $this->findBySql('SELECT max(id) as maxId FROM '.self::tableName())->all();	
			$nextIdMapel = $lasIdMapel[0]['maxId']+1;
			$kodeMapel = 'P-'.str_pad($nextIdMapel,3,'0',STR_PAD_LEFT);
			return $kodeMapel;
		}else{
			return $this->kodeMapel;	
		}
	}
}
