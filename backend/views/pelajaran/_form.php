<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm

/* @var $this yii\web\View */
/* @var $model app\models\Pelajaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">

    <?php $form = ActiveForm::begin([
			'id' => 'form-data-pelajaran',
			'type' => ActiveForm::TYPE_HORIZONTAL,
			'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
		]); ?>
	<div class="col-md-6">
		<?= 
			$form->field($model, 'jurusan')->dropDownList(Yii::$app->params['listJurusan'])
			/*$form->beginField($model, 'jurusan');
				echo Html::activeLabel( $model, 'jurusan', [
						class'=>'control-label col-md-2',
					]);
				$inputJurusan = Html::activeTextInput( $model, 'jurusan', [
						class'=>'form-control',
					]);
				echo Html::tag('div',$inputJurusan,[
						class'=>'col-md-10',
					]);
			echo $form->endField();*/
		?>
    
        <?= $form->field($model, 'kodeMapel')->textInput(['maxlength' => 20, 'value'=>$model->newKodeMapel()]) ?>
    
        <?= $form->field($model, 'namaPelajaran')->textInput(['maxlength' => 45]) ?>
    
        <?= $form->field($model, 'totalPertemuan')->textInput() ?>
    
        <?php  //$form->field($model, 'semester')->dropDownList([ 1 => '1', 2 => '2', ], ['prompt' => '']) ?>
    
        <?= $form->field($model, 'statusAktif')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>
	</div>
    <div class="col-md-1">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-block' : 'btn btn-primary btn-block']) ?>
        </div>
        <div class="form-group">
            <?php
				if(!$model->isNewRecord){
			 		Html::a('Delete', ['/pelajaran/delete','id'=>$model->id], ['class'=>'btn btn-danger btn-block']);
				}
			?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
