<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PelajaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pelajaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jurusan') ?>

    <?= $form->field($model, 'kodeMapel') ?>

    <?= $form->field($model, 'namaPelajaran') ?>

    <?= $form->field($model, 'totalPertemuan') ?>

    <?php // echo $form->field($model, 'semester') ?>

    <?php // echo $form->field($model, 'statusAktif') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
