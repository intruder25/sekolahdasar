<?php

use yii\helpers\Html;
use yii\grid\GridView;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GuruSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Guru';
$this->params['page-title'] = 'Data Guru';
$this->params['page-subtitle'] = 'Informasi data guru';
$this->params['breadcrumbs'][] = ['label'=>'Data Guru','template' =>'<li>'.FA::icon('book').' {link}</li>'];
?>
<<div class="clearfix s-row">
	<div class="col-md-12">
    	  <?= Html::a('Create Guru', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
</div>
<div class="clearfix s-row">
	<div class="col-md-12">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			
            'NIP',
			[
				'attribute' => 'filePhoto',
				'format' => 'raw',
				'value' => function($dataProvider) { 
					$urlImage = $dataProvider->photoGuruUrl;
					if($urlImage=='/images/guru/'){
						if($dataProvider->jenisKelamin=='Laki-laki')
							$urlImage = '/images/default_teacher_male.png';
						else
							$urlImage = '/images/default_teacher_female.png';
					}
					$image = Html::img($urlImage);
					$cimage = Html::tag('div',$image,['class'=>'thumbnail']);
					$return = Html::tag('div',$cimage,['class'=>'col-md-12','style'=>'max-width:180px; max-height:180px;min-width:128px; min-height:128px;']);
					return $return;
				},
			],
            'namaGuru',
			[
				'attribute' => 'pelajaran',
				'value' => 'pelajaran.namaPelajaran',
			],
            
            // 'alamat',
            'telepon',
            // 'tglLahir',
            // 'tempatLahir',
            'jenisKelamin',
            // 'agama',
            // 'statusAktif',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	</div>
</div>
