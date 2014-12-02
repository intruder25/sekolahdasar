<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\widgets\ActiveForm

/* @var $this yii\web\View */
/* @var $model app\models\Guru */
/* @var $form yii\widgets\ActiveForm */
?>


<?php
	$foto = $model->filePhoto==''?'images/default_teacher.png':'images/guru/'.$model->filePhoto;
?>
<div class="row-s">
<div class="panel <?php echo $model->isNewRecord ? 'panel-success':'panel-primary';?>">
    <div class="panel-heading">
	    <h3 class="panel-title">Panel title</h3>
    </div>
    <div class="panel-body">
		<?php $form = ActiveForm::begin([
                'id' => 'form-data-guru',
                'type' => ActiveForm::TYPE_HORIZONTAL,
                'formConfig' => ['labelSpan' => 2, 'deviceSize' => ActiveForm::SIZE_SMALL],
			    'options'=>['enctype'=>'multipart/form-data'] 
            ]); ?>
        <div class="col-md-8">
            <?= $form->field($model, 'NIP')->textInput(['maxlength' => 45]) ?>
        
            <?= $form->field($model, 'namaGuru')->textInput(['maxlength' => 100]) ?>
        
            <?= 
				//$form->beginField($model, 'idPelajaran');
				//echo $form->endField();
				
				$form->field($model, 'idPelajaran')->dropDownList(ArrayHelper::map($pelajaran->find()->all(), 'id', 'namaPelajaran')) 
				
			?>
        
            <?= Html::activeFileInput($model, 'photoGuru', ['class'=>'hide', 'accept'=>'image/*']);?>
        
            <?= $form->field($model, 'alamat')->textInput(['maxlength' => 255]) ?>
        
            <?= $form->field($model, 'telepon')->textInput(['maxlength' => 45]) ?>
        
            <?= $form->field($model, 'tglLahir')->textInput() ?>
        
            <?= $form->field($model, 'tempatLahir')->textInput(['maxlength' => 70]) ?>
        
            <?= $form->field($model, 'jenisKelamin')->dropDownList([ 'Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan', ], ['prompt' => '']) ?>
        
            <?= $form->field($model, 'agama')->textInput(['maxlength' => 35]) ?>
        
            <?= $form->field($model, 'statusAktif')->dropDownList([ '0', '1', '2', ], ['prompt' => '']) ?>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="thumbnail">
                        <img src="<?php echo $foto; ?>" id="guru-image-view" data-src="holder.js/300x300" alt="..." style="max-width:200px; max-height:200px; min-height:128px; min-width:128px;">
                        <div class="caption">
                            <h4>Foto guru</h4>
                            <p><?= Html::button('Pilih Foto', ['class'=>'btn btn-info uplaod-foto',  'data-input'=>'#guru-photoguru', 'data-view'=>'#guru-image-view']);?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>
                </div>
            </div>
        </div>
    	<?php ActiveForm::end(); ?>
	</div>
</div>
</div>
