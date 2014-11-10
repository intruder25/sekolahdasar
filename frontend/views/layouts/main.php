<?php
use yii\helpers\Html;
use yii\helpers\BaseUrl;
use yii\bootstrap\Nav;
use yii\bootstrap\Carousel;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
<div class="row"  id="header-wrapper">
    <header class="container sc-header">
        <?php
            NavBar::begin([
                'brandLabel' => 'School Name',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top sc-nav-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact Us', 'url' => ['/site/contact']],
                ['label' => 'School Update', 'url' => ['/post/index']],
            ];
			$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
            /*
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            */
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>
        <div class="row">
	        <div class="col-md-12">
	        <?php
	        	echo Carousel::widget([
	        		'items' => [
						[
							'content' => '<img src="'.BaseUrl::base(true).'/images/slider1.jpg" class="center-block" />',
							'caption' => '<span class="caption-slider caption-left">
												<h4 style="text-align:left;">Hygienist & Healthy Cafetaria</h4>
												<p>Every meal at our school is made by hygienist and fresh inggridient.</p>
										  </span>',
						],
						[
							'content' => '<img src="'.BaseUrl::base(true).'/images/slider2.jpg" class="center-block" />',
							'caption' => '<span class="caption-slider caption-right">
												<h4 style="text-align:right;">Comfortable classroom</h4>
												<p>Students can receive a better lesson in a comfortable classroom atmosphere</p>
										  </span>',
						],
						[
							'content' => '<img src="'.BaseUrl::base(true).'/images/slider3.jpg" class="center-block" />',
							'caption' => '<span class="caption-slider caption-left">
												<h4 style="text-align:left;">Enjoying Friendship</h4>
												<p>Students can receive a better lesson in a comfortable classroom atmosphere</p>
										  </span>',
						],
	        		],
	        		'options'=>[
	        			'class'=>'sc-carousel'
	        		]
	        	]);
	        	
	        ?>
	        </div>
        </div>
	</header>
</div>    	
<div class="row">
    <div class="container" id="main-wrapper">
	    <?= Breadcrumbs::widget([
	        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	    ]) ?>
	    <?= Alert::widget() ?>
	   	<?= $content ?>
    </div>
</div>    
<div class="row bg-nav" id="footer-wrapper">
    <footer class="container">
    	<div class="row">
    		<div class="col-md-4">
    			<div class="clearfix footer-box">
					<fieldset class="box-title bg-main">
							<h4>Site Map</h4>
					</fieldset>
					<section class="box-content">
						<ul class="list-unstyled sc-list">
						  <li>Home</li>
						  <li>About Us</li>
						  <li>Contact Us</li>
						</ul>
					</section>
				</div>
    		</div>	
    		<div class="col-md-4">
    			<div class="clearfix footer-box">
					<fieldset class="box-title bg-main">
							<h4>School Address</h4>
					</fieldset>
					<section class="box-content">
						<p>Jl. Gatot Subroto Barat No 64</p>
						<p>Denpasar, Bali</p>
						<p>+62 361 4567890</p>
						<button class="btn bg-main pull-right" type="button"><i class="fa fa-map-marker"></i> Google Map View</button>
					</section>
				</div>
    		</div>
    		<div class="col-md-4">
    			<div class="clearfix footer-box">
					<fieldset class="box-title bg-main">
							<h4>Follow Us!</h4>
					</fieldset>
					<section class="box-content">
						<a href="#" class="social-link"><i class="fa fa-facebook-square fa-3x"></i></a>
						<a href="#" class="social-link"><i class="fa fa-google-plus-square fa-3x"></i></a>
						<a href="#" class="social-link"><i class="fa fa-twitter-square fa-3x"></i></a>
					</section>
				</div>
    		</div>	
    	</div>
    	<div class="clearfix">
	        <p class="pull-left">&copy; School Name <?= date('Y') ?></p>
	        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>
</div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
