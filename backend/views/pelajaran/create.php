<?php

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $model app\models\Pelajaran */

$this->title = 'Tambah data pelajaran';
$this->params['page-title'] = 'Tambah Data Pelajaran';
$this->params['breadcrumbs'][] = ['label'=>'Data Pelajaran','template' =>'<li>'.FA::icon('book').' {link}</li>', 'url' => ['index']];
$this->params['breadcrumbs'][] = "Tambah data pelajaran";
?>
<div class="clearfix s-row">
	<div class="col-md-12">
		<?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
