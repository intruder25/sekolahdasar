<?php

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;


/* @var $this yii\web\View */
/* @var $model app\models\Siswa */

$this->title = 'Tambah data siswa';
$this->params['page-title'] = 'Tambah Data Siswa';
$this->params['breadcrumbs'][] = ['label'=>'Data Siswa','template' =>'<li>'.FA::icon('graduation-cap').' {link}</li>', 'url' => ['index']];
$this->params['breadcrumbs'][] = "Tambah data siswa";
?>

<div class="clearfix s-row">
	<div class="col-md-12">
		<?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
