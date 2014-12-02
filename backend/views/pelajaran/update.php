<?php

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $model app\models\Pelajaran */

$this->title = 'Pelajaran : '.$model->namaPelajaran;
$this->params['page-title'] = 'Data Pelajaran';
$this->params['page-subtitle'] = 'Update data pelarajan';
$this->params['breadcrumbs'][] = ['label'=>'Data Pelajaran','template' =>'<li>'.FA::icon('book').' {link}</li>', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->jurusan.' '.$model->namaPelajaran;
?>
<div class="clearfix s-row">
	<div class="col-md-12">
		<?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>

