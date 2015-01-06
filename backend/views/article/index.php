<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\grid\CheckboxColumn;
use rmrevin\yii\fontawesome\FA;
use yii\bootstrap\Alert;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->registerCss('
	#table-artikel>table>tbody>tr{cursor:pointer;}
	#table-artikel>table>tbody>tr.selected-row{background:rgba(91,192,222,0.4);}
');

$this->title = 'Artikel Dan Berita';
$this->params['page-title'] = 'Data Artikel Dan Berita';
$this->params['page-subtitle'] = 'Informasi data Artikel dan Berita';
$this->params['breadcrumbs'][] = ['label'=>'Artikel dan Berita','template' =>'<li>'.FA::icon('newspaper-o').' {link}</li>'];

?>
<div class="clearfix s-row">
	<div class="col-md-12">
        <div class="row">
        	<?php echo $this->render('_search', ['model' => $searchModel, 'userModel'=>$userModel]); ?>
        </div>
    	<?php 
			echo Html::beginTag('div',['class'=>'btn-group action-group-top', "role"=>"group","aria-label"=>"Tambah Data Artikel dan Berita"]);
			echo Html::a('Tambah Artikel', ['create', 'ct'=>2], ['class' => 'btn btn-primary btn-action-article']);
        	echo Html::a('Tambah Berita', ['create', 'ct'=>1], ['class' => 'btn btn-warning btn-action-article']);
        	echo Html::button('Hapus', ['class' => 'btn btn-danger btn-action-article']);
			echo Html::endTag('div');
		?>
    </div>
</div>
<div class="clearfix s-row">
	<div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Artikel Dan Berita</h3>
            </div>
            <div class="panel-body">
            <div class="clearfix" id="alert-place">
            
            </div>
			<?= GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
				'options' => [
					'id'=>'table-artikel' 
				],
				'rowOptions' => function ($model, $index, $widget, $grid){
					return ['class'=>'tr-select', 'data-selected'=>'0'];
				},
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
        			//['class' => CheckboxColumn::className()],
                    //'id',
                    //'title',
					[
						'attribute' => 'title',
						'label' => 'Judul',
						'value' => function($data){
							$title = ucwords(strtolower($data->title));
							return $title;
						},
						'contentOptions' => ['style'=>'max-width:400px;']
					],
                    //'content:ntext',
                    //'tags',
                    //'group',
					[
						'attribute' => 'group',
						'label' => 'Divisi',
						'value' => function($data){
							//return $data->group;
							$divisi = ArrayHelper::getValue(Yii::$app->params['listArtikelGroup'], $data->group);
							return $divisi;
						},
					],
                    // 'kategori',
					[
						'attribute' => 'kategori',
						'label' => 'Kategori',
						'value' => function($data){
							//return $data->group;
							$divisi = ArrayHelper::getValue(Yii::$app->params['listArtikelKategori'], $data->kategori);
							return $divisi;
						},
					],
                    //'user_id',
					[
						'attribute' => 'user',
						'label' => 'Penulis',
						'value' => 'user.nama',
					],
                    // 'date_publish',
                    //'published',
					[
						'attribute' => 'published',
						'format'=>'raw',
						'label' => 'Status',
						'value' => function($data){
							//return $data->group;
							
							$options = ['title'=>'Status tidak terbit','style'=>'color:#d9534f', 'class'=>'pub-button', 'data-idartikel'=>$data->id, 'role'=>'button', 'data-title'=> ucwords(strtolower($data->title)), 'data-token'=>md5($data->id."yii"), 'data-status'=>$data->published ];
							//$activeIcon = Html::a(FA::icon('check-circle') , '#', ['style'=>'color:#d9534f']);
							if($data->published=='1'){
								$options['style'] = 'color:#5cb85c';
								$options['title'] ='Status terbit';
								//$activeIcon = Html::a(FA::icon('check-circle'), '#',  ['style'=>'color:#5cb85c']);
							}
							$activeIcon  = Html::a(FA::icon('check-circle'), '#',  $options);
							$activeIcon .= Html::activeCheckbox( $data, 'id', ['class'=>'hide chk-article', 'value'=>$data->id, 'labelOptions'=>['class'=>'hide']] );
							return $activeIcon;
						},
					],
        
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
			</div>
        </div>
	</div>
</div>

<?php
$this->registerJs('
	$(".pub-button").click(function(e){
		e.preventDefault();
		var title = $(this).data("title");
		var id = $(this).data("idartikel");
		var token = $(this).data("token");
		var published= $(this).data("status");
		bootbox.dialog({
			message: "Ubah status terbit \""+title+"\" ?",
			title: "Konfirmasi Aksi",
			buttons: {
				danger: {
					label: "Batal",
					className: "btn-danger",
					callback: function() {
						
					}
				},
				main: {
					label: "Ubah",
					className: "btn-primary",
					callback: function() {
						$.ajax({
							url:"'.Url::to(["article/update_published",]).'?t="+token,
							type:"POST",
							data:{"id":id, "status":published}
						}).done(function(data, message){
							$("#alert-place").html(data);
							setTimeout(
						  	function() 
						  	{
								window.location.reload();
						  	}, 1000);
						});
					}
				}
			}
		}); 
	});	
	
	$(".tr-select").click(function(e){
		var selected = $(this).data("selected");
		if(selected=="0"){
			$(this).addClass("selected-row");
			$(this).data("selected", "1");
			$(this).find(".chk-article").prop("checked",true);
		}else{
			$(this).removeClass("selected-row");
			$(this).data("selected", "0");	
			$(this).find(".chk-article").prop("checked",false);
		}
		
	});
	
');
?>