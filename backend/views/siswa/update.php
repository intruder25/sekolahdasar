<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Siswa */


$this->title = 'Update Siswa: ' . ' ' . $model->nama;
$this->params['page-title'] = 'Update Data Siswa';
$this->params['page-subtitle'] = '('.$model->nama.')';
$this->params['breadcrumbs'][] = ['label' => 'Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->nama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="clearfix s-row">
	<div class="col-md-12">
		<?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
