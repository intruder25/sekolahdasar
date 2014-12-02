<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = 'Pelajaran : '.$model->namaGuru;
$this->params['page-title'] = 'Data Guru';
$this->params['page-subtitle'] = 'Informasi data guru';
$this->params['breadcrumbs'][] = ['label'=>'Data Guru','template' =>'<li>'.FA::icon('book').' {link}</li>', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->namaGuru;

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

<div class="clearfix s-row" style="margin-bottom:10px;">
	<div class="col-md-3">
        <div class="panel panel-info">
        	<div class="panel-heading">
            	<h3 class="panel-title">Foto</h3>
            </div>
            <div class="panel-body">
            <?php
                $urlImage = $model->photoGuruUrl;
                if($urlImage=='/images/guru/'){
                    if($model->jenisKelamin=='Laki-laki')
                        $urlImage = '/images/default_teacher_male.png';
                    else
                        $urlImage = '/images/default_teacher_female.png';
                }
            
                echo Html::beginTag('div',['class'=>'thumbnail no-border']);
                echo Html::img($urlImage,['alt'=>'image.guru.png', 'style'=>'max-width:200px;max-height:200px;']);
                echo Html::tag('div', '<h4>'.$model->namaGuru.'</h4>', ['class'=>'caption']);
                echo Html::endTag('div');
            ?>
            </div>
        </div>
    </div>
	<div class="col-md-9">
		<?= DetailView::widget([
            'model' => $model,
			'enableEditMode' => false,
			'panel'=>[
				'heading'=>'Detail data pelajaran',
				'type'=>DetailView::TYPE_INFO,
			],
			'attributes' => [
				//'id',
				'NIP',
				'namaGuru',
				[
					'attribute'=>'pelajaran',
					'value'=>$model->pelajaran->namaPelajaran,
				],
				'alamat',
				'telepon',
				'tglLahir',
				'tempatLahir',
				'jenisKelamin',
				'agama',
				'statusAktif',
				
			],
		]) ?>
	</div>
</div>
