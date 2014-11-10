<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

// maps------------------
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\services\DirectionsWayPoint;
use dosamigos\google\maps\services\TravelMode;
use dosamigos\google\maps\overlays\PolylineOptions;
use dosamigos\google\maps\services\DirectionsRenderer;
use dosamigos\google\maps\services\DirectionsService;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\services\DirectionsRequest;
use dosamigos\google\maps\overlays\Polygon;
use dosamigos\google\maps\layers\BicyclingLayer;
// ------------------maps

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;


/*
prepare maps
*/
$coord = new LatLng(['lat' => 39.720089311812094, 'lng' => 2.91165944519042]);
$map = new Map([
    'center' => $coord,
    'zoom' => 14,
]);

/*// lets use the directions renderer
$home = new LatLng(['lat' => 39.720991014764536, 'lng' => 2.911801719665541]);
$school = new LatLng(['lat' => 39.719456079114956, 'lng' => 2.8979293346405166]);
$santo_domingo = new LatLng(['lat' => 39.72118906848983, 'lng' => 2.907628202438368]);

// setup just one waypoint (Google allows a max of 8)
$waypoints = [
    new DirectionsWayPoint(['location' => $santo_domingo])
];

$directionsRequest = new DirectionsRequest([
    'origin' => $home,
    'destination' => $school,
    'waypoints' => $waypoints,
    'travelMode' => TravelMode::DRIVING
]);

// Lets configure the polyline that renders the direction
$polylineOptions = new PolylineOptions([
    'strokeColor' => '#FFAA00',
    'draggable' => true
]);

// Now the renderer
$directionsRenderer = new DirectionsRenderer([
    'map' => $map->getName(),
    'polylineOptions' => $polylineOptions
]);

// Finally the directions service
$directionsService = new DirectionsService([
    'directionsRenderer' => $directionsRenderer,
    'directionsRequest' => $directionsRequest
]);

// Thats it, append the resulting script to the map
$map->appendScript($directionsService->getJs());

// Lets add a marker now
$marker = new Marker([
    'position' => $coord,
    'title' => 'My Home Town',
]);

// Provide a shared InfoWindow to the marker
$marker->attachInfoWindow(
    new InfoWindow([
        'content' => '<p>This is my super cool content</p>'
    ])
);

// Add marker to the map
$map->addOverlay($marker);

// Now lets write a polygon
$coords = [
    new LatLng(['lat' => 25.774252, 'lng' => -80.190262]),
    new LatLng(['lat' => 18.466465, 'lng' => -66.118292]),
    new LatLng(['lat' => 32.321384, 'lng' => -64.75737]),
    new LatLng(['lat' => 25.774252, 'lng' => -80.190262])
];

$polygon = new Polygon([
    'paths' => $coords
]);

// Add a shared info window
$polygon->attachInfoWindow(new InfoWindow([
        'content' => '<p>This is my super cool Polygon</p>'
    ]));

// Add it now to the map
$map->addOverlay($polygon);


// Lets show the BicyclingLayer :)
$bikeLayer = new BicyclingLayer(['map' => $map->getName()]);

// Append its resulting script
$map->appendScript($bikeLayer->getJs());*/

// Lets add a marker now
$marker = new Marker([
    'position' => $coord,
    'title' => 'My Home Town',
]);

// Provide a shared InfoWindow to the marker
$marker->attachInfoWindow(
    new InfoWindow([
        'content' => '<p>This is my super cool content</p>'
    ])
);

// Add marker to the map
$map->addOverlay($marker);
?>
<div class="row content-wrapper">
	<div class="clearfix">
		<div class="col-md-12 pull-right">
    		<section class="content-title">
				<h2>Bali Public School</h2>
			</section>
    	</div>
	</div>
	<div class="clearfix">
	    <div class="col-md-6">
			<section class="content">
				<p>
			        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
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
				<p>
			        You also can visit our school at 
			    </p>
			    <div class="col-md-12">
			    	<p>Jl. Gatot Subroto Barat No 64</p>
			    	<p>Denpasar, Bali</p>
			    	<p>+62 361 4567890</p>
			    </div>
                <div class="clearfix">
                	<?php
                    /** display maps **/
					// Display the map -finally :)
					echo $map->display();
					?>
                </div>
			</section>
		</div>
	</div>
</div>
