<?php

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = 'Pelajaran : '.$model->namaGuru;
$this->params['page-title'] = 'Data Guru';
$this->params['page-subtitle'] = 'Update data guru';
$this->params['breadcrumbs'][] = ['label'=>'Data Guru','template' =>'<li>'.FA::icon('book').' {link}</li>', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->namaGuru;
?>
<div class="clearfix s-row">
	<div class="col-md-12">
		<?= $this->render('_form', [
            'model' => $model,
			'pelajaran' => $pelajaran,
        ]) ?>
    </div>
</div>
