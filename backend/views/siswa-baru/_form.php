<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SiswaBaru */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswa-baru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomorPendaftaran')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => 35]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'kota')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'tglLahir')->textInput() ?>

    <?= $form->field($model, 'tempatLahir')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'jenisKelamin')->dropDownList([ 'Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'agama')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'namaAyah')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'namaIbu')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'alamatOrtu')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'teleponOrtu')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'pekerjaanAyah')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'pekerjaanIbu')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'sekolahAsal')->textInput(['maxlength' => 140]) ?>

    <?= $form->field($model, 'nilaiUn')->textInput() ?>

    <?= $form->field($model, 'nilaiUm')->textInput() ?>

    <?= $form->field($model, 'nilaiPrestasi')->textInput() ?>

    <?= $form->field($model, 'statusTerima')->dropDownList([ 'Tidak Diterima' => 'Tidak Diterima', 'Dalam Proses' => 'Dalam Proses', 'Diterima' => 'Diterima', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nomorIjazah')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'nomorTranskrip')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'fileIjazah')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'fileTranskrip')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'filePhoto')->textInput(['maxlength' => 150]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
