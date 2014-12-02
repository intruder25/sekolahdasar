<?php

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;


/* @var $this yii\web\View */
/* @var $model app\models\Siswa */

$this->title = 'Pendaftaran siswa baru';
$this->params['page-title'] = 'Pendaftaran';
$this->params['breadcrumbs'][] = ['label'=>'Data Pendaftaran','template' =>'<li>'.FA::icon('graduation-cap').' {link}</li>', 'url' => ['siswabaru']];
$this->params['breadcrumbs'][] = "Form Pendaftaran";
?>
