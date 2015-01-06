<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\widgets\ActiveForm;
use kartik\date\DatePicker;
use dosamigos\ckeditor\CKEditorFinder;
use iutbay\yii2kcfinder\KCFinder;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */



// kcfinder options
// http://kcfinder.sunhater.com/install#dynamic
//Yii::setAlias('@frontendUrl', );

$kcfOptions = array_merge(KCFinder::$kcfDefaultOptions, [
    'uploadURL' => Yii::$app->params['frontendUrl'].'/images',
	'uploadDir' => Yii::getAlias('@frontend').'/web/images',
    'access' => [
        'files' => [
            'upload' => true,
            'delete' => false,
            'copy' => false,
            'move' => false,
            'rename' => false,
        ],
        'dirs' => [
            'create' => true,
            'delete' => false,
            'rename' => false,
        ],
    ],
]);

// Set kcfinder session options
Yii::$app->session->set('KCFINDER', $kcfOptions);
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

	<div class="col-md-9">
    <?= $form->field($model, 'title')->textInput(['maxlength' => 150]) ?>
    <?= $form->field($model, 'content')->widget(CKEditorFinder::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) // ->textarea(['rows' => 10]) ?>
    <?= $form->field($model, 'tags')->textInput(['maxlength' => 255]) ?>    
	</div>
    <div class="col-md-3">
    	<div class="row">
        	<div class="col-md-6">
    		<?= $form->field($model, 'group')->dropDownList(Yii::$app->params['listArtikelGroup'], ['prompt' => 'Pilih Divisi']) ?>
			</div>
            <div class="col-md-6">
    		<?php 
				//if(isset($kategori)){
				if(!isset($kategori)){$kategori=$model->kategori;}
				echo Html::beginTag('div', ['class'=>'form-group']);
				echo Html::activeLabel($model, 'kategori', ['class'=>'control-label']) ;
				echo Html::dropDownList('Article[kategori]', $kategori, Yii::$app->params['listArtikelKategori'], ['prompt' => 'Pilih Kategori', 'class'=>'form-control', 'id'=>'article-kategori']);
				echo Html::endTag('div');
				//}else{
				//	$form->field($model, 'kategori')->dropDownList(Yii::$app->params['listArtikelKategori'], ['prompt' => 'Pilih Kategori']) ;
				//}
				
			?>
			</div>
        </div>
        <div class="row">
        	<div class="col-md-12">
    		<?= $form->field($model, 'user_id')->textInput() ?>
			</div>
        </div>
        <div class="row">
        	<div class="col-md-7">
			<?= 
                $form->beginField($model, 'date_publish');
                echo '<label>Tanggal Terbit</label>';
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
			</div>
        	<div class="col-md-5">
    		<?= $form->field($model, 'published')->dropDownList(['1'=>'Publised','0'=>'Not Publised',]) ?>
    		</div>
        </div>
	</div>
    <div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	</div>
    <?php ActiveForm::end(); ?>

</div>

<?php
/*
$this->registerJsFile('js/ckeditor/ckeditor.js',['depends'=>'yii\web\YiiAsset']);
$this->registerJsFile('js/ckeditor/adapters/jquery.js',['depends'=>'yii\web\YiiAsset']);
$this->registerJs('
	$("textarea#article-content").ckeditor({
		height : \'600px\',
	});
');
*/
?>