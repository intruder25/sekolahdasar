<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TahunAjaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tahun-ajaran-form">

    <?php $form = ActiveForm::begin([
	]); ?>

    <?= $form->field($model, 'periodeTahun')->textInput(['maxlength' => 50,'enableAjaxValidation'=>true]) ?>

    <?= $form->field($model, 'statusAktif')->dropDownList([ 'Aktif' => 'Aktif', 'Deleted' => 'Deleted', 'Tidak Aktif' => 'Tidak Aktif', ], ['prompt' => '']) ?>

    <div class="form-group">
    	<div class="col-md-4 col-md-offset-8">
        <?= //Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])
			Html::button('Simpan', ['class' => 'btn btn-success', 'id'=>'simpan-tahun-ajaran'])
		 ?>
         </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
