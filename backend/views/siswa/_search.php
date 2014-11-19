<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idSiswa') ?>

    <?= $form->field($model, 'nomorInduk') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'jurusan') ?>

    <?php // echo $form->field($model, 'idKelas') ?>

    <?php // echo $form->field($model, 'telepon') ?>

    <?php // echo $form->field($model, 'email') ?>

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

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
