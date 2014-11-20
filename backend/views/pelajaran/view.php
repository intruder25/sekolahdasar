<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $model app\models\Pelajaran */

$this->title = 'Pelajaran : '.$model->namaPelajaran;
$this->params['page-title'] = 'Data Pelajaran';
$this->params['page-subtitle'] = 'Informasi data pelarajan';
$this->params['breadcrumbs'][] = ['label'=>'Data Pelajaran','template' =>'<li>'.FA::icon('book').' {link}</li>', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->jurusan.' '.$model->namaPelajaran;
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
	<div class="col-md-12">
		<?= DetailView::widget([
            'model' => $model,
			'enableEditMode' => false,
			'panel'=>[
				'heading'=>'Detail data pelajaran',
				'type'=>DetailView::TYPE_INFO,
			],
            'attributes' => [
                'id',
                'jurusan',
                'kodeMapel',
                'namaPelajaran',
                'totalPertemuan',
                'semester',
                'statusAktif',
            ],
        ]) ?>
	</div>
</div>
