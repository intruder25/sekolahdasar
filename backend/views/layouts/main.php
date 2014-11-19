<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

// check page title string
$pageTitle = isset($this->params['page-title'])?$this->params['page-title']:"";
$pageSubTitle  = isset($this->params['page-subtitle'])?$this->params['page-subtitle']:"";
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
   	<header class="row">
        <?php
            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems1 = [
                ['label' => 'Dashboard', 'url' => ['/site/index']],
				['label' => 'Data Siswa', 'url' => ['/siswa/index']],
            ];
			$menuItems2 = [];
            if (Yii::$app->user->isGuest) {
                $menuItems2[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems2[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
			
			echo Nav::widget([
                'options' => ['class' => 'navbar-nav'],
                'items' => $menuItems1,
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems2,
            ]);
            NavBar::end();
        ?>
	</header>
        
	<div class="row maincontainer">
        <div class="clearfix s-row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    <?php echo $pageTitle; ?> <small><?php echo $pageSubTitle; ?></small>
                </h2>
            </div>
        </div>
        <div class="clearfix s-row">
			<?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'options'=>[
                                'style'=>'margin-left:15px;margin-right:15px;',
                                'class' => 'breadcrumb'
                            ]
            ]) ?>
        </div>
        <?= $content ?>
    </div>
        
    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
