<?php

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;


/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = 'Tambah data guru';
$this->params['page-title'] = 'Tambah Data Guru';
$this->params['breadcrumbs'][] = ['label'=>'Data Guru','template' =>'<li>'.FA::icon('book').' {link}</li>', 'url' => ['index']];
$this->params['breadcrumbs'][] = "Tambah data guru";
?>
<div class="clearfix s-row">
	<div class="col-md-12">
		<?= $this->render('_form', [
            'model' => $model,
			'pelajaran' => $pelajaran,
        ]) ?>
    </div>
</div>

