<?php

use yii\helpers\Html;
use yii\grid\GridView;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PelajaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pelajaran';
$this->params['page-title'] = 'Data Pelajaran';
$this->params['page-subtitle'] = 'Informasi data mata pelajaran';
$this->params['breadcrumbs'][] = ['label'=>'Data Pelajaran','template' =>'<li>'.FA::icon('book').' {link}</li>'];
?>

<div class="clearfix s-row">
	<div class="col-md-12">
    	 <?= Html::a('Create Pelajaran', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </div>
</div>
<div class="clearfix s-row">
	<div class="col-md-12">
    	<?= GridView::widget([
			'dataProvider' => $dataProvider,
			'filterModel' => $searchModel,
			'columns' => [
				[
					'class' => 'yii\grid\SerialColumn',
					'contentOptions' => ['style'=>'width:30px;']
				
				],
				
				[
					'attribute' => 'kodeMapel',
					'label' => 'Kode',
					'contentOptions' => ['style'=>'width:100px;']
				],
				[
					'attribute' => 'jurusan',
					'contentOptions' => ['style'=>'width:120px;']
				],
				[
					'attribute' => 'namaPelajaran'
				],
				[
					'attribute' => 'totalPertemuan',
					'contentOptions' => ['style'=>'width:150px;']
				],
				[
					'attribute' => 'semester',
					'contentOptions' => ['style'=>'width:200px;']
				],
				[
					'attribute' => 'statusAktif',
					'contentOptions' => ['style'=>'width:100px;']
				],
	
				['class' => 'yii\grid\ActionColumn'],
			],
		]); ?>
    </div>
</div>   
