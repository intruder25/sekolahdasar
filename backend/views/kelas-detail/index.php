<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KelasDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kelas Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kelas Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idKelas',
            'idSiswa',
            'idTahunAjaran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
