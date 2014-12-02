<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KelasDetail */

$this->title = 'Create Kelas Detail';
$this->params['breadcrumbs'][] = ['label' => 'Kelas Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
