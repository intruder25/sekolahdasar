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
}
