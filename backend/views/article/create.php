<?php

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;


/* @var $this yii\web\View */
/* @var $model app\models\Article */

$page_title = ($kategori!=3) ? 'Data Artikel Dan Berita':'Data Kegiatan';
$page_subTitle = ($kategori!=3) ? 'Tambah artikel dan berita':'Tambah kegiatan';
$bc_first = ($kategori!=3) ? 'Artikel dan Berita':'Kegiatan';
$this->title = $page_title;
$this->params['page-title'] = $page_title;
$this->params['page-subtitle'] = $page_subTitle;
$this->params['breadcrumbs'][] = ['label'=>$bc_first,'template' =>'<li>'.FA::icon('newspaper-o').' {link}</li>', 'url' => ['index']];
$this->params['breadcrumbs'][] = $page_subTitle;
?>
<div class="clearfix s-row">
	<div class="col-md-12">
    <?= $this->render('_form', [
		'kategori' => $kategori,
        'model' => $model,
    ]) ?>
	</div>
</div>
