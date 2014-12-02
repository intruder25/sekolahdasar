<?php

use yii\helpers\Html;
use yii\grid\GridView;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siswa Baru';
$this->params['page-title'] = 'Data Pendaftaran';
$this->params['page-subtitle'] = 'Informasi pendaftaran siswa baru';
$this->params['breadcrumbs'][] = ['label'=>'Data Pendaftaran','template' =>'<li>'.FA::icon('graduation-cap').' {link}</li>'];
?>
<div class="clearfix s-row">
	<div class="col-md-12">
    	<?= Html::a('Pendaftaran', ['addsiswabaru'], ['class' => 'btn btn-success pull-right']) ?>
    </div>
</div>