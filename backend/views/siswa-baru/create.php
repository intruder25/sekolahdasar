<?php

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;


/* @var $this yii\web\View */
/* @var $model app\models\Siswa */

$this->title = 'Pendaftaran Siswa Baru';
$this->params['page-title'] = 'Pendaftaran';
$this->params['breadcrumbs'][] = ['label'=>'Pendaftaran','template' =>'<li>'.FA::icon('graduation-cap').' {link}</li>', 'url' => ['index']];
$this->params['breadcrumbs'][] = "Pendaftarab Baru";
?>

<div class="clearfix s-row">
	<div class="col-md-12">
		<?= $this->render('_form-pendaftaran', [
            'model' => $model,
        ]) ?>
    </div>
</div>

