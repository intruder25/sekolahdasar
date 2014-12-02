<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property integer $idKelas
 * @property integer $jurusan
 * @property string $tingkat
 * @property integer $waliKelas
 * @property string $namaKelas
 * @property integer $kapasitas
 * @property string $statusAktif
 *
 * @property Guru $waliKelas0
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kapasitas'], 'integer'],
            [['statusAktif'], 'string'],
            [['tingkat'], 'string', 'max' => 10],
			[['jurusan'], 'string', 'max'=>20],
            [['namaKelas'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id Kelas',
            'jurusan' => 'Jurusan',
            'tingkat' => 'Tingkat',
            'namaKelas' => 'Nama Kelas',
            'kapasitas' => 'Kapasitas',
            'statusAktif' => 'Status Aktif',
        ];
    }

}
