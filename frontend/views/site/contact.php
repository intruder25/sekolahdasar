<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\captcha\Captcha;

// ------------------maps

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row content-wrapper">
	<div class="clearfix">
		<div class="col-md-12 pull-right">
    		<section class="content-title">
				<h2>Hubungi Kami</h2>
			</section>
    	</div>
	</div>
	<div class="clearfix">
	    <div class="col-md-6">
			<section class="content">
				<p>
			        Untuk mendapatkan informasi lebih lengkap mengenai sekolah kami, anda dapat mengirimkan pesan melalui contact-box dibawah ini. Untuk mendapatkan jawaban secara langsung anda juga dapat menghubungi kami pada alamat dan nomor telepon yang tertera pada halaman ini.
			    </p>

			    <div class="row">
			        <div class="col-md-12">
			            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
			                <?= $form->field($model, 'name') ?>
			                <?= $form->field($model, 'email') ?>
			                <?= $form->field($model, 'subject') ?>
			                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
			                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
			                    'template' => '	<div class="clearfix">
			                    				<div class="col-md-6">{image}</div>
			                    				<div class="col-md-6">{input}</div>
			                    				</div>',
			                ]) ?>
			                <div class="form-group">
			                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
			                </div>
			            <?php ActiveForm::end(); ?>
			        </div>
			    </div>				
			</section>
		</div>
		<div class="col-md-6">
			<section class="content">
				<div class="clearfix">
                	<?php
                    echo Html::beginTag('div', ['style'=>'text-align:center; margin-top:-30px;']);
					echo Html::img('images/logo.png', ['class'=>'image-center']);
					echo Html::tag('h3','Yayasan Anak Emas', ['class'=>'title-contact']);
					echo Html::beginTag('span', ['style'=>'display:block; margin-bottom:30px;']);
						echo Html::tag('p','KANTOR PUSAT <br /> TPA-TODDLER-PLAY GROUP-RA-TPQ', ['style'=>'font-weight:bold; color:#F00;']); 
						echo Html::tag('p','Jl. Teuku Umar No. 17 Denpasar 80114 - Bali <br />telp. 0361-227922'); 
					echo Html::endTag('span');
					echo Html::beginTag('span', ['style'=>'display:block; margin-bottom:30px;']);
						echo Html::tag('p','SEKOLAH DASAR (SD)', ['style'=>'font-weight:bold; color:#F00;']); 
						echo Html::tag('p','Jl. Buana Raya No. 99X Denpasar - Bali <br />telp. 0361-8448092'); 
					echo Html::endTag('span');
					echo Html::beginTag('span', ['style'=>'display:block; margin-bottom:30px;']);
						echo Html::tag('p','anakemas98@gmail.com<br />www.twitter.com/anakemasdps<br />www.facebook.com/anakemasdps<br />www.anakemas.sch.id'); 
					echo Html::endTag('span');
					echo Html::endTag('div');
					?>
                </div>
			</section>
		</div>
	</div>
</div>
