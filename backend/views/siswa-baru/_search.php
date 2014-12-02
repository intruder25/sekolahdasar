<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SiswaBaruSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswa-baru-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomorPendaftaran') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'telepon') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'kota') ?>

    <?php // echo $form->field($model, 'tglLahir') ?>

    <?php // echo $form->field($model, 'tempatLahir') ?>

    <?php // echo $form->field($model, 'jenisKelamin') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'namaAyah') ?>

    <?php // echo $form->field($model, 'namaIbu') ?>

    <?php // echo $form->field($model, 'alamatOrtu') ?>

    <?php // echo $form->field($model, 'teleponOrtu') ?>

    <?php // echo $form->field($model, 'pekerjaanAyah') ?>

    <?php // echo $form->field($model, 'pekerjaanIbu') ?>

    <?php // echo $form->field($model, 'sekolahAsal') ?>

    <?php // echo $form->field($model, 'nilaiUn') ?>

    <?php // echo $form->field($model, 'nilaiUm') ?>

    <?php // echo $form->field($model, 'nilaiPrestasi') ?>

    <?php // echo $form->field($model, 'statusTerima') ?>

    <?php // echo $form->field($model, 'nomorIjazah') ?>

    <?php // echo $form->field($model, 'nomorTranskrip') ?>

    <?php // echo $form->field($model, 'fileIjazah') ?>

    <?php // echo $form->field($model, 'fileTranskrip') ?>

    <?php // echo $form->field($model, 'filePhoto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
