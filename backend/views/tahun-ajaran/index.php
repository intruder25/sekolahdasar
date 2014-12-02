<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TahunAjaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tahun Ajarans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahun-ajaran-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tahun Ajaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'periodeTahun',
            'statusAktif',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
