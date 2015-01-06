<?php

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$page_title = ($kategori==NULL) ? 'Data Artikel Dan Berita':'Data Kegiatan';
$page_subTitle = ($kategori==NULL) ? 'Update artikel dan berita':'Update kegiatan';
$bc_first = ($kategori==NULL) ? 'Artikel dan Berita':'Kegiatan';
$this->title = $model->title;
$this->params['page-title'] = $page_title;
$this->params['page-subtitle'] = $page_subTitle;
$this->params['breadcrumbs'][] = ['label'=>$bc_first,'template' =>'<li>'.FA::icon('newspaper-o').' {link}</li>', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->title;
?>
<div class="clearfix s-row">
	<div class="col-md-12">
		<?= $this->render('_form', [
            'model' => $model,
        ]) ?>
	</div>
</div>
