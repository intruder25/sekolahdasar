<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="row content-wrapper">
	<div class="clearfix">
		<div class="col-md-12 pull-right">
    		<h1></h1>
    	</div>
	</div>
	<div class="clearfix">
	    <div class="col-md-9 pull-right">
			<section class="content-title">
				<h2><?php echo  stripslashes('<span style=\"font-size:36px;\"><strong>'.$content['title'].'</strong></span>'); ?></h2>
			</section>
			<?php if(!isset($submenu)){?>
				<section class="content">
				<?php 
                echo stripslashes($content['content']); 
                ?>
				</section>
			<?php }elseif($submenu=='building'){ ?>
				<section class="content">
					<h5>Building & Facities</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, </p>
					<p class="clearfix">
						<div class="col-md-4">
							<div class="thumbnail">
								<img data-src="holder.js/100%x180" src="<?php echo $baseUrl; ?>/images/building_image1.jpg" alt="...">
							</div>	
						</div>	
						<div class="col-md-4">
							<div class="thumbnail">
								<img data-src="holder.js/100%x180" src="<?php echo $baseUrl; ?>/images/building_image2.jpg" alt="...">
							</div>	
						</div>	
						<div class="col-md-4">
							<div class="thumbnail">
								<img data-src="holder.js/100%x180" src="<?php echo $baseUrl; ?>/images/building_image3.jpg" alt="...">
							</div>	
						</div>	
					</p>
					<p class="clearfix">
						<div class="col-md-4">
							<div class="thumbnail">
								<img data-src="holder.js/100%x180" src="<?php echo $baseUrl; ?>/images/building_image4.jpg" alt="...">
							</div>	
						</div>	
						<div class="col-md-4">
							<div class="thumbnail">
								<img data-src="holder.js/100%x180" src="<?php echo $baseUrl; ?>/images/building_image5.jpg" alt="...">
							</div>	
						</div>	
						<div class="col-md-4">
							<div class="thumbnail">
								<img data-src="holder.js/100%x180" src="<?php echo $baseUrl; ?>/images/building_image6.jpg" alt="...">
							</div>	
						</div>	
					</p>
				</section>
				
			<?php }elseif($submenu=='extracurricular'){ ?>
				<section class="content">
					<h5>Extracurricular</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, </p>
					<p class="clearfix">
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img data-src="holder.js/100%x180" src="<?php echo $baseUrl; ?>/images/extracurricular_image1.jpg" alt="...">
								<div class="caption">
									<b>Balinese Dance</b>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img data-src="holder.js/100%x180" src="<?php echo $baseUrl; ?>/images/extracurricular_image2.jpg" alt="...">
								<div class="caption">
									<b>Basket Ball</b>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img data-src="holder.js/100%x180" src="<?php echo $baseUrl; ?>/images/extracurricular_image3.jpg" alt="...">
								<div class="caption">
									<b>Swimming</b>
								</div>
							</div>
						</div>
					</p>
					<p class="clearfix">
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img data-src="holder.js/100%x180" src="<?php echo $baseUrl; ?>/images/extracurricular_image4.jpg" alt="...">
								<div class="caption">
									<b>Scout</b>
								</div>
							</div>
						</div>
					</p>
				</section>
			<?php } ?>
		</div>
		<div class="col-md-3 pull-left">
			<div class="clearfix">
				<fieldset class="box-title bg-header">
						<h4>Tentang Kami </h4>
				</fieldset>
				<section class="box-content">
					<ul class="list-unstyled sc-list">
					  <li><a href="<?php echo Yii::$app->urlManager->createUrl('site/about');?>"> Yayasan Anak Emas</a></li>
					  <li><a href="<?php echo Yii::$app->urlManager->createUrl(['site/about','sub'=>'paud']);?>"> PAUD</a></li>
					  <li><a href="<?php echo Yii::$app->urlManager->createUrl(['site/about','sub'=>'sd']);?>"> Sekolah Dasar</a></li>
					  <li><a href="<?php echo Yii::$app->urlManager->createUrl(['site/about','sub'=>'tpq']);?>"> TPQ</a></li>
					</ul>
				</section>
			</div>
		</div>
	</div>

</div>
