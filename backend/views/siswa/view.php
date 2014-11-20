<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $model app\models\Siswa */

$this->title = 'Siswa';
$this->params['page-title'] = 'Data Siswa';
$this->params['page-subtitle'] = 'Informasi data siswa';
$this->params['breadcrumbs'][] = ['label'=>'Data Siswa','template' =>'<li>'.FA::icon('graduation-cap').' {link}</li>', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->nama;
?>
<div class="clearfix s-row" style="margin-bottom:10px;">
	<div class="col-md-2 col-md-offset-10">
    	<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
</div>
<div class="clearfix s-row">
	<div class="col-md-12">
		<?php 
			echo DetailView::widget([ 
				'model' => $model,
				'enableEditMode' => false,
				'panel'=>[
					'heading'=>'Detail data siswa',
					'type'=>DetailView::TYPE_INFO,
				],
				'attributes' => [
					'nomorInduk',
					'password',
					'nama',
					'telepon',
					'email:email',
					'alamat',
					'kota',
					'tglLahir',
					'tempatLahir',
					'jenisKelamin',
					'agama',
					'namaAyah',
					'namaIbu',
					'alamatOrtu',
					'teleponOrtu',
					'pekerjaanAyah',
					'pekerjaanIbu',
				],
			]) 
		?>
	</div>
</div>
