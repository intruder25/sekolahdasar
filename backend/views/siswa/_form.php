<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Siswa */
/* @var $form yii\widgets\ActiveForm */

if($model->id==''){
	$model->nomorInduk= $model->getNim();
}
?>

<div class="row">
	
    <?php $form = ActiveForm::begin([
			'id'=>'form-data-siswa',
			'type' => ActiveForm::TYPE_VERTICAL
		]); ?>
	<div class="col-md-6">
    <?= $form->field($model, 'nomorInduk')->textInput(['maxlength' => 50, 'value'=>$model->nomorInduk, 'readonly'=>'readonly']) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => 150]) ?>
	
    <?= $form->field($model, 'telepon')->textInput(['maxlength' => 35]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 100, 'type'=>'email']) ?>
    
    <?= $form->field($model, 'jenisKelamin')->dropDownList([ 'Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'kota')->textInput(['maxlength' => 100]) ?>
    
    <?= $form->field($model, 'tempatLahir')->textInput(['maxlength' => 100]) ?>
    
    </div>
	<div class="col-md-6">
    
    <?= 
		//$form->field($model, 'tglLahir')->textInput() 
		$form->beginField($model, 'tglLahir');
		echo '<label>Tanggal lahir siswa</label>';
			echo DatePicker::widget([
				'name' => 'Siswa[tglLahir]', 
				'value' => '',
				'type' =>3,
				'options' => ['placeholder' => 'Pilih tanggal lahir'],
				'pluginOptions' => [
					'format' => 'yyyy-m-d',
					'todayHighlight' => true
				]
			]);
		echo $form->endField();
	?>

    <?= //$form->field($model, 'agama')->textInput(['maxlength' => 50]) 
		$form->field($model, 'agama')->dropDownList(Yii::$app->params['listAgama'])
	?>

    <?= $form->field($model, 'namaAyah')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'namaIbu')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'alamatOrtu')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'teleponOrtu')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'pekerjaanAyah')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'pekerjaanIbu')->textInput(['maxlength' => 150]) ?>
	</div>
    <div class="col-md-6 col-md-offset-6">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
	</div>
    <?php ActiveForm::end(); ?>

</div>
