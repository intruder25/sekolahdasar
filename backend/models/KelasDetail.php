<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelas_detail".
 *
 * @property integer $id
 * @property integer $idKelas
 * @property integer $idSiswa
 * @property integer $idGuru
 * @property integer $idTahunAjaran
 *
 * @property Guru $idGuru0
 * @property Kelas $idKelas0
 * @property Siswa $idSiswa0
 * @property TahunAjaran $idTahunAjaran0
 */
class KelasDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelas_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idKelas', 'idGuru', 'idTahunAjaran'], 'required'],
            [['id', 'idKelas', 'idGuru', 'idTahunAjaran'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idKelas' => 'Id Kelas',
            'idGuru' => 'Id Guru',
            'idTahunAjaran' => 'Id Tahun Ajaran',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGuru0()
    {
        return $this->hasOne(Guru::className(), ['id' => 'idGuru']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKelas0()
    {
        return $this->hasOne(Kelas::className(), ['id' => 'idKelas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTahunAjaran0()
    {
        return $this->hasOne(TahunAjaran::className(), ['id' => 'idTahunAjaran']);
    }
}
