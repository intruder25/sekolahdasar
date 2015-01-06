<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
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


?>
<div class="row content-wrapper">
	<div class="clearfix">
		<div class="col-md-12 pull-right">
    		<section class="content-title">
				<h2>Hubungi Kami</h2>
			</section>
    	</div>
	</div>
	<div class="clearfix contact_map">
	    <div class="col-md-6">
        	<section class="content">
				<div class="clearfix">
                	<?php
                    echo Html::beginTag('div', ['style'=>'text-align:center;']);
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
		<div class="col-md-6">
        	<section class="content">
            	<?php
					//echo Html::button('Show Map', ['class'=>'btn btn-info', 'data-toggle'=>'modal','data-target'=>'#maps-modal']);
					/*---------------- MAPS ---------------------*/
					$coord = new LatLng(['lat' => 39.720089311812094, 'lng' => 2.91165944519042]);
					$map = new Map([
						'center' => $coord,
						'zoom' => 14,
					]);
					$map->width = '100%';
					$map->containerOptions = ['id'=>'maps'];
					// Lets add a marker now
					$marker = new Marker([
						'position' => $coord,
						'title' => 'Anak Emas Denpasar',
					]);
					// Add marker to the map
					$map->addOverlay($marker);
					
					/** display maps **/
					// Display the map -finally :)
					echo $map->display();
				?>
            </section>
		</div>
	</div>
</div>
