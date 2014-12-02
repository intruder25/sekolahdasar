<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TahunAjaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="clearfix s-row">
	<div class="col-md-7">
    	<div class="clearfix" id="ta-container">
			<?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
               // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
        
                    'id',
                    'periodeTahun',
                    'statusAktif',
        
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
	</div>
    <div class="col-md-5">
    	<?= $this->render('_form', [
			'model' => $searchModel,
		]) ?>
    </div>
</div>
