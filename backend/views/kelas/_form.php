<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kelas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kelas-form">

    <?php $form = ActiveForm::begin([
			'id'=>'form-data-kelas',
			'action' => ['kelas/create'],
			'type' => ActiveForm::TYPE_VERTICAL
		]); ?>
	
    <?= $form->field($model, 'namaKelas')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'jurusan')->dropDownList(Yii::$app->params['listJurusan'], ['prompt' => 'Pilih Jurusan']) ?>

    <?= $form->field($model, 'tingkat')->textInput(['maxlength' => 10]) ?>

    <?php //$form->field($model, 'waliKelas')->dropDownList(ArrayHelper::map($guru->find()->all(), 'id', 'namaGuru'),['prompt'=>'Pilih Wali Kelas']) ?>

    <?= $form->field($model, 'kapasitas')->textInput() ?>

    <?= $form->field($model, 'statusAktif')->dropDownList([ '1','0', ], ['prompt' => '']) ?>
	
    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
        	<?= Html::button('Perbaharui', ['class' => 'btn btn-info btn-block']) ?>
        </div>
    	<div class="col-md-4">
        	<?= Html::submitButton('Tambah', ['class' => 'btn btn-success btn-block']) ?>
        </div>
    </div>
    
    <?php ActiveForm::end(); ?>

</div>
