<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kelas';
$this->params['page-title'] = 'Data Kelas';
$this->params['page-subtitle'] = 'Informasi data Kelas';
$this->params['breadcrumbs'][] = ['label'=>'Data Kelas','template' =>'<li>'.FA::icon('graduation-cap').' {link}</li>'];
?>
<div class="clearfix s-row">
	<div class="col-md-12">
    	<?php // Html::a('Create Kelas', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </div>
</div>
<div class="clearfix s-row">
	<div class="col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Data Kelas</h3>
            </div>
            <div class="panel-body">
				<?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
            
                        //'id',
                        'namaKelas',
                        'jurusan',
                        'tingkat',
                        //'waliKelas',
                        // 'kapasitas',
                        // 'statusAktif',
            			[
							'format' => 'raw',
							'value' => function ($model) {                      
									$return = '';
									$return  = Html::a(FA::icon('eye'),['kelas-detail/detail','id'=>$model->id],['role'=>'button', 'class'=>'btn-link btn-action btn-action-kelas', 'data-id'=>$model->id, 'data-action'=>'view']);
									$return .= Html::a(FA::icon('pencil'),NULL,['role'=>'button', 'class'=>'btn-action btn-action-kelas', 'data-id'=>$model->id, 'data-action'=>'edit']);
									$return .= Html::a(FA::icon('trash'),['kelas/delete','id'=>$model->id],['data-pjax'=>'0', 'class'=>'btn-action btn-action-kelas', 'data-method'=>'post', 'data-confirm'=>'Hapus data Kelas '.$model->namaKelas.'?', 'title'=>'Hapus']);
									return $return;
							},
						],
                        //['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
	    	</div>
        </div>
	</div>
    <div class="col-md-4">
    	<div class="panel panel-primary">
            <div class="panel-heading">
           		<h3 class="panel-title">Form Data Kelas</h3>
            </div>
            <div class="panel-body">
            	<?= $this->render('_form', [
					'model' => $model,
				]) ?>
            </div>
        </div>
    </div>
</div>
<?php
	$this->registerJs('
		$(".btn-action-kelas").click(function(e){
			_id = $(this).data("id");
			_action = $(this).data("action");
			if(_action=="edit"){
				$.post("'.Url::to(["kelas/view"]).'",{"id":_id}, function(data){
						var dataKelas = data.model;
						$("#form-data-kelas").find("#kelas-namakelas").val(dataKelas.namaKelas);
						$("#form-data-kelas").find("#kelas-jurusan").val(dataKelas.jurusan);
						$("#form-data-kelas").find("#kelas-tingkat").val(dataKelas.tingkat);
						$("#form-data-kelas").find("#kelas-kapasitas").val(dataKelas.kapasitas);
						$("#form-data-kelas").find("#kelas-statusaktif").val(dataKelas.statusAktif);
						$("#form-data-kelas").find("#kelas-walikelas").val(dataKelas.waliKelas);
					},"json");
			}
		});
	');
?>