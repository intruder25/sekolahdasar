<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tahun_ajaran".
 *
 * @property integer $id
 * @property string $periodeTahun
 * @property string $statusAktif
 */
class TahunAjaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tahun_ajaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['periodeTahun'], 'required'],
            [['id'], 'integer'],
            [['statusAktif'], 'string'],
            [['periodeTahun'], 'string', 'max' => 50],
			[['periodeTahun'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'periodeTahun' => 'Periode Tahun',
            'statusAktif' => 'Status Aktif',
        ];
    }
}
