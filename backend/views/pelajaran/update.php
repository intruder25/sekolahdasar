<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pelajaran */

$this->title = 'Update Pelajaran: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pelajarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pelajaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
