<?php

use yii\helpers\Html;
use yii\grid\GridView;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pendaftaran Siswa Baru';
$this->params['page-title'] = 'Pendaftaran';
$this->params['page-subtitle'] = 'Informasi pendaftaran';
$this->params['breadcrumbs'][] = ['label'=>'Pendaftaran','template' =>'<li>'.FA::icon('graduation-cap').' {link}</li>'];
?>
<div class="clearfix s-row">
	<div class="col-md-12">
    	<?= Html::a('Create Siswa', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </div>
</div>
<div class="clearfix s-row">
	<div class="col-md-12">
		<?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
    
                //'id',
                'nomorPendaftaran',
                //'password',
                'email:email',
                'nama',
                'telepon',
                //'alamat',
                'kota',
                // 'tglLahir',
                // 'tempatLahir',
                // 'jenisKelamin',
                // 'agama',
                // 'namaAyah',
                // 'namaIbu',
                // 'alamatOrtu',
                // 'teleponOrtu',
                // 'pekerjaanAyah',
                // 'pekerjaanIbu',
                'sekolahAsal',
                'nilaiUn',
                // 'nilaiUm',
                // 'nilaiPrestasi',
                // 'statusTerima',
                // 'nomorIjazah',
                // 'nomorTranskrip',
                // 'fileIjazah',
                // 'fileTranskrip',
                // 'filePhoto',
    
                //['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
	</div>
</div>
