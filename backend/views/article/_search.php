<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArticleSearch */
/* @var $form yii\widgets\ActiveForm */

$this->registerCss('
	.input-block{ margin-bottom:15px;}
	.btn-search-group{width:100%;}
	.btn-search-group>.btn{width:46%; margin-left:2%;}
');
?>

<div class="col-md-12">

    <?php $form = ActiveForm::begin([
		'type' => ActiveForm::TYPE_INLINE,
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    
	<div class="row input-block">
   		<div class="col-md-12">
		<?php  //$form->field($model, 'id') ?>
         
        <?php 
			echo Html::beginTag('div', ['class'=>'form-group col-md-4', 'style'=>'padding-left:0px; padding-right:4px;']);
			echo Html::activeInput( 'text', $model, 'title', ['placeholder'=>'Judul artikel', 'class'=>'form-control', 'style'=>'width:100%;']);
			echo Html::endTag('div');
			//$form->field($model, 'title') 
		?>
    
        <?php  //$form->field($model, 'content') ?>
    
        <?php //$form->field($model, 'tags') ?>
    
        <?php 
			echo Html::beginTag('div', ['class'=>'form-group col-md-2', 'style'=>'padding-left:0px; padding-right:4px;']);
			echo Html::activeDropDownList( $model, 'user_id', ArrayHelper::map($userModel->find()->all(), 'id', 'nama'), ['prompt' => 'Cari Penulis', 'class'=>'form-control', 'style'=>'width:100%;']);
			echo Html::endTag('div');
			//$form->field($model, 'user_id')->dropDownList(ArrayHelper::map($userModel->find()->all(), 'id', 'nama'), ['prompt'=>'Cari Penulis'])  
		?>
    
        <?php 
			echo Html::beginTag('div', ['class'=>'form-group col-md-2', 'style'=>'padding-left:0px; padding-right:4px;']);
			echo Html::activeDropDownList( $model, 'group', Yii::$app->params['listArtikelGroup'], ['prompt' => 'Pilih Divisi', 'class'=>'form-control', 'style'=>'width:100%;']);
			echo Html::endTag('div');
			//$form->field($model, 'group')->dropDownList(Yii::$app->params['listArtikelGroup'], ['prompt' => 'Pilih Divisi']) 
		?>
    
        <?php 
			echo Html::beginTag('div', ['class'=>'form-group col-md-2', 'style'=>'padding-left:0px; padding-right:4px;']);
			echo Html::activeDropDownList( $model, 'kategori', Yii::$app->params['listArtikelKategori'], ['prompt' => 'Pilih Kategori', 'class'=>'form-control', 'style'=>'width:100%;']);
			echo Html::endTag('div');
			//$form->field($model, 'kategori')->dropDownList(Yii::$app->params['listArtikelKategori'], ['prompt' => 'Pilih Kategori']) 
		?>
    
        <?php // echo $form->field($model, 'date_publish') ?>
    
        <?php // echo $form->field($model, 'published') ?>
        
            <div class="col-md-2">
                <div class="form-group btn-search-group">
                    <?= Html::submitButton('Cari', ['class' => 'btn btn-info']) ?>
                    <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
                </div>
            </div>
        </div>
	</div>

    <?php ActiveForm::end(); ?>

</div>
