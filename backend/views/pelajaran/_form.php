<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pelajaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pelajaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'kodeMapel')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'namaPelajaran')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'totalPertemuan')->textInput() ?>

    <?= $form->field($model, 'semester')->dropDownList([ 1 => '1', 2 => '2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'statusAktif')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
