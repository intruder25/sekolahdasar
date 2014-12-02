<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kelas */

$this->title = 'Update Kelas: ' . ' ' . $model->idKelas;
$this->params['breadcrumbs'][] = ['label' => 'Kelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idKelas, 'url' => ['view', 'id' => $model->idKelas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
