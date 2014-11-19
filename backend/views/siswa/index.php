<?php

use yii\helpers\Html;
use yii\grid\GridView;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siswa';
$this->params['page-title'] = 'Data Siswa';
$this->params['page-subtitle'] = 'Informasi data siswa';
$this->params['breadcrumbs'][] = ['label'=>'Data Siswa','template' =>'<li>'.FA::icon('graduation-cap').' {link}</li>'];
?>
<div class="clearfix s-row">
	<div class="col-md-12">
    	<?= Html::a('Create Siswa', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </div>
</div>
<div class="clearfix s-row">
	<div class="col-md-12">
		<?= 
			GridView::widget([
				'dataProvider' => $dataProvider,
				'layout' => '{summary}{items}{pager}',
				'filterModel'=> $searchModel,
				'columns' => [
					['class' => 'yii\grid\SerialColumn'],
					[
						'attribute' => 'nomorInduk',
						'label' => 'NIS',
						'contentOptions' => ['style'=>'width:100px;']
					],
					[
						'attribute' => 'nama',
						'label' => 'Nama',
						'contentOptions' => ['style'=>'width:250px;']
					],
					[
						'attribute' => 'alamat',
						'label' => 'Alamat Tinggal',
						'contentOptions' => ['style'=>'width:450px;']
					],
					[
						'attribute' => 'kota',
						'label' => 'Kota Tinggal',
						'contentOptions' => ['style'=>'width:130px;']
					],
					[
						'attribute' => 'telepon',
						'label' => 'Telepon',
						'contentOptions' => ['style'=>'width:130px;']
					],
					[
						'attribute' => 'jenisKelamin',
						'label' => 'Jenis Kelamin',
						'contentOptions' => ['style'=>'width:100px;']
					],
					/*
					//'id',
					'nomorInduk',
					//'password',
					'nama',
					//'jurusan',
					//'idKelas',
					// 'telepon',
					// 'email:email',
					'alamat',
					'kota',
					// 'tglLahir',
					// 'tempatLahir',
					'jenisKelamin',
					// 'agama',
					'namaAyah',
					// 'namaIbu',
					// 'alamatOrtu',
					// 'teleponOrtu',
					// 'pekerjaanAyah',
					// 'pekerjaanIbu',
					*/
					['class' => 'yii\grid\ActionColumn'],
				],
				'pager'=>[]
			]); 
		
		
		?>
        
        
    </div>
</div>


<div class="siswa-index">


    

</div>
