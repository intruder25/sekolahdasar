<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
?>

<?php $form = ActiveForm::begin(['id'=>'form-event-small', 'action'=>Url::to(['event/create'])]); ?>

<?= $form->field($model, 'eventName')->textInput(['maxlength' => 100]) ?>

<?php // $form->field($model, 'url')->textInput(['maxlength' => 150]) ?>

<?= 
	//$form->field($model, 'startTime')->textInput() 
	$form->beginField($model, 'startTime');
		echo '<label>Start date of Event</label>';
		echo DatePicker::widget([
			'name' => 'Event[startTime]', 
			'value' => date('Y-m-d', strtotime('+2 days')),
			'options' => ['placeholder' => 'Select issue date ...'],
			'pluginOptions' => [
				'format' => 'yyyy-m-d',
				'todayHighlight' => true
			]
		]);
	echo $form->endField();
?>

<?= 
	//$form->field($model, 'endTime')->textInput() 
	
	$form->beginField($model, 'endTime');
		echo '<label>End date of Event</label>';
		echo DatePicker::widget([
			'name' => 'Event[endTime]', 
			'value' => date('Y-m-d', strtotime('+2 days')),
			'options' => ['placeholder' => 'Select issue date ...'],
			'pluginOptions' => [
				'format' => 'yyyy-m-d',
				'todayHighlight' => true
			]
		]);
	echo $form->endField();
	
?>

<?= $form->field($model, 'active')->dropDownList(['1'=>'Aktif', '0'=>'Tidak Aktif']) ?>

<?= $form->field($model, 'eventColor')->dropDownList($eventClass) ?>

<div class="form-group">
	<?= 
		Html::button('Simpan',[
			'class'=>'btn btn-success',
			'id'=>'btn-form-event'
		]);
		/*
		Html::submitButton($model->isNewRecord ? 'Create' : 'Update', [
				'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 
			]) 
		*/
	?>
</div>

<?php ActiveForm::end(); ?>