<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use rmrevin\yii\fontawesome\FA;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kelas';
$this->params['page-title'] = 'Data Kelas';
$this->params['page-subtitle'] = 'Informasi data Kelas';
$this->params['breadcrumbs'][] = ['label'=>'Data Kelas','template' =>'<li>'.FA::icon('graduation-cap').' {link}</li>', 'url' => ['kelas/index']];
$this->params['breadcrumbs'][] = '';//$model->namaGuru;

?>
<div class="clearfix s-row">
	<div class="col-md-4">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Informasi Kelas</h3>
            </div>
            <div class="panel-body">
           		<div class="loader2 hide"></div>
            	<table class="table">
                    <tr>
                    	<td>Tahun Ajaran</td><td><?php echo Html::dropDownList('tahun-ajaran','',ArrayHelper::map($tahunAjaran->find()->where("statusAktif<>'Deleted'")->all(), 'id','periodeTahun'),['class'=>'form-control input-sm', 'prompt'=>'Pilih tahun ajaran', 'id'=>'tahun-ajaran', 'data-idkelas'=>$kelas->id]); //$kelas->guruWali['namaGuru'];?></td>
                    </tr>
                	<tr>
                    	<td>Nama Kelas</td><td><?php echo $kelas->namaKelas;?></td>
                    </tr>
                    <tr>
                    	<td>Guru Wali</td><td><?php echo Html::dropDownList('wali-kelas','',ArrayHelper::map($guru, 'id','namaGuru'),['class'=>'form-control input-sm', 'prompt'=>'Pilih guru wali', 'id'=>'wali-kelas']); //$kelas->guruWali['namaGuru'];?></td>
                    </tr>
                	<tr>
                    	<td>Tingkat/Jurusan</td><td><?php echo $kelas->tingkat.'/'.$kelas->jurusan;?></td>
                    </tr>
                	<tr>
                    	<td>Jumlah Siswa</td><td><?php echo '0';?></td>
                    </tr>
                    <tr>
                    	<td colspan="2">
                        <?= Html::button('Tahun Ajaran',['class'=>'btn btn-warning', 'data-target'=>'#modal-tahun-ajaran','data-toggle'=>'modal']) ?>
                        <?= Html::button('Update',['class'=>'btn btn-info pull-right', 'id'=>'update-detail-kelas', 'data-idkelas'=>$kelas->id, 'data-iddkelas'=>'', ]) ?>
                        </td>
                    </tr>
                </table>
            </div>
    	</div>
    </div>
	<div class="col-md-8">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idKelas',
            //'idSiswa',
            'idTahunAjaran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	</div>
</div>

<?php
Modal::begin([
    'header' => '<h4>Tahun Pelajaran</h4>',
	'options' => ['class'=>'fade modal modal-no-round'],
	'id'=>'modal-tahun-ajaran',
]);
echo Html::tag('div','Loading',['class'=>'loader hide']);
echo Html::tag('div','',['id'=>'result-tahun-ajaran']);
	
Modal::end();


$this->registerJs('
	$("#tahun-ajaran").change(function(e){
		var idkelas = $(this).data("idkelas");
		var idTahunAjaran = $(this).val();
		var _url = "'.Url::to(["kelas-detail/view"]).'";
		$.ajax({
			url:_url,
			type:"POST",
			data:{"idTahunAjaran":idTahunAjaran, "idKelas":idkelas},
			beforeSend:function(data){
				$(".loader2").removeClass("hide");
			}
		}).done(function(data,message){
			$("#wali-kelas").val(data.idGuru);
			//$(this).attr("data-iddkelas", data.id);
			$("#update-detail-kelas").data("iddkelas", data.id);
			$(".loader2").addClass("hide");
		});
	});
	
	$("#modal-tahun-ajaran").on("shown.bs.modal",function(e){
		$.ajax({
			url:"'.Url::to(['tahun-ajaran/detail']).'",
			type:"GET",
			beforeSend:function(e){
				$("#modal-tahun-ajaran").find(".loader").removeClass("hide");
				$("#modal-tahun-ajaran").find("#result-tahun-ajaran").addClass("hide");
			}
		}).done(function(data,message){
			$("#modal-tahun-ajaran").find("#result-tahun-ajaran").html(data);
			$("#modal-tahun-ajaran").find(".loader").addClass("hide");
			$("#modal-tahun-ajaran").find("#result-tahun-ajaran").removeClass("hide");
		});
	});
	
	$("#update-detail-kelas").click(function(e){
		var thPelajaran = $("#tahun-ajaran").val();
		var waliKelas = $("#wali-kelas").val();
		var idKelas = $(this).data("idkelas");
		var iddKelas = $(this).data("iddkelas");
		var _url = "'.Url::to(['kelas-detail/create']).'";
		if(iddKelas!=""){
			_url = "'.Url::to(['kelas-detail/update']).'&id="+iddKelas;
		}
		//alert("idTahunPelajaran:"+thPelajaran+"-|-idGuru:"+waliKelas+"-|-idKelas:"+idKelas);
		$.ajax({
			url:_url,
			type:"POST",
			data:{"idTahunPelajaran":thPelajaran, "idGuru":waliKelas, "idKelas":idKelas},
			beforeSend:function(data){
				$(".loader2").removeClass("hide");
			}
		}).done(function(data,message){
			//$(this).attr("data-iddkelas", data.id);
			$(this).data("data-iddkelas", data.id);
			$(".loader2").addClass("hide");
		});
	})
	
	$(document).on("click","#simpan-tahun-ajaran", function(e){
		var _url = $(this).closest("form").attr("action");
		//alert(url);
		var _data = $(this).closest("form").serialize();
		$.ajax({
			url:_url,
			type:"POST",
			data:_data,
			beforeSend:function(e){
				$("#modal-tahun-ajaran").find(".loader").removeClass("hide");
				$("#modal-tahun-ajaran").find("#result-tahun-ajaran").addClass("hide");
			}
		}).done(function(data,message){
			$("#modal-tahun-ajaran").find("#result-tahun-ajaran").html(data);
			$("#modal-tahun-ajaran").find(".loader").addClass("hide");
			$("#modal-tahun-ajaran").find("#result-tahun-ajaran").removeClass("hide");
		})
		
	});
');
?>
