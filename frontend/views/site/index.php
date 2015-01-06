<?php
use yii\helpers\Html;
use yii\helpers\BaseUrl;
use himiklab\thumbnail\EasyThumbnailImage;
use rmrevin\yii\fontawesome\FA;
use yii\bootstrap\Carousel;
/* @var $this yii\web\View */
$this->title = 'Yayasan Anak Emas : Mempersiapkan Generasi Berkualitas';
?>
<div class="row margin-20">
    <div class="clearfix">
		<h3 class="divider main-divider"><?php echo FA::icon('graduation-cap'); ?></h3>
    </div>
    <div class="clearfix">
        <div class="col-sm-10 col-sm-offset-1 col-xs-12">
            <div class="row">
                <div class="col-sm-4 nav-image" title="Salah satu dari tingkat pendidikan yang disediakan oleh Yayasan Anak Emas">
                    <?php
                    echo EasyThumbnailImage::thumbnailImg(
                        'images/slider3.jpg',
                        250,
                        150,
                        EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                        [
                            'alt' => 'slider2.jpg',
                            'class'=> 'img-thumbnail'
                        ]
                    );
                    ?>
                    <h4>PAUD</h4>
                </div>
                <div class="col-sm-4 nav-image" title="Salah satu dari tingkat pendidikan yang disediakan oleh Yayasan Anak Emas">
                    <?php
                    echo EasyThumbnailImage::thumbnailImg(
                        'images/slider1.jpg',
                        250,
                        150,
                        EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                        [
                            'alt' => 'slider2.jpg',
                            'class'=> 'img-thumbnail'
                        ]
                    );
                    ?>
                    <h4>Sekolah Dasar</h4>
                </div>
                <div class="col-sm-4 nav-image" title="Salah satu dari tingkat pendidikan yang disediakan oleh Yayasan Anak Emas">
                    <?php
                    echo EasyThumbnailImage::thumbnailImg(
                        'images/slider2.jpg',
                        250,
                        150,
                        EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                        [
                            'alt' => 'slider2.jpg',
                            'class'=> 'img-thumbnail'
                        ]
                    );
                    ?>
                    <h4>TPQ</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
	    <h3 class="divider main-divider"><?php echo FA::icon('institution'); ?></h3>
    </div>
</div>
<div class="row content-wrapper">
	<div class="clearfix">
        <div class="col-md-8">
            <div class="clearfix">
                <h3>Berita &amp; Artikel</h3>
                <ul class="berita-list">
                    <?php for($i=0; $i<6; $i++){?>
                    <li>
                        <div class="col-md-2 col-sm-2 col-xs-0 date-recent">
                            <div class="date">
                                <p>19 <span>DEC</span></p>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-12 title-recent">
                            <h4>KUNJUNGAN DARI DINAS PENDIDIKAN DAN KEBUDAYAAN KABUPATEN BANDUNG <br /><small>BERITA | 19-Dec</small></h4>
                            <p>Alhamdulillah, hari ini Jumat 19 Desember 2014, PAUD Anak Emas mendapatkan kunjungan studi banding...<a class="btn btn-link pull-right">Read more</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="clearfix">
                <h3>Tentang Yayasan</h3>
                <p class="text-justify">Berdirinya Yayasan Anak Emas, berawal dari beberapa pendidik yang peduli terhadapa perkembangan anak usia dini, khususnya putra-putri ummat Islam yang berada di Bali. Dimana Bali sebagai daerah pariwisata, tidak menutup kemungkinan budaya asing dapat masuk dan berdampak pada rusaknya moral serta norma-norma agama generasi muda. Para pendiri mempunyai keinginan yang kuat untuk membangun suatu lembaga pendidikan Islam yang difokuskan pada anak-anak usia dini...</p>
                <p><a class="btn btn-info pull-right" href="#">Read more</a></p>
            </div>
            <div class="clearfix">
                <h3>Video Terbaru</h3>
                <p class="text-justify">
                    <!-- 4:3 aspect ratio -->
                    <div class="embed-responsive embed-responsive-4by3">
                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/UOeCbMeDpz0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </p>
                <p class="text-justify">Karnaval dilaksanakan pada Kamis, 28 November 2013. Sekitar 100 siswa PAUD dan RA Anak Emas ikut memeriahkan acara ini. Anak-anak berjalan dari RA Anak Emas dan berakhir di PAUD Anak Emas.</p>
                <p><a class="btn btn-info pull-right" href="#">Read more</a></p>
            </div>
        </div>
    </div>
    <div class="clearfix">
    	<h3 class="divider index-divider"><?php echo FA::icon('camera'); ?></h3>
    </div>
    <div class="clearfix">
        <div class="col-md-12">
            <?php
                    $imageGroup = array();
                    
                    
                    for($i=0; $i<3; $i++){
                        $imageGroup[$i]  = Html::beginTag('div');
                        for($j=0; $j<4; $j++){
                            $imageGroup[$i] .= Html::beginTag('div',['class'=>'col-md-3']).
                                            EasyThumbnailImage::thumbnailImg(
                                                    'images/galeri/contoh-album/ex-galeri-0'.rand(1,4).'.jpg',
                                                    250,
                                                    150,
                                                    EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                                                    [
                                                        'alt' => 'slider2.jpg',
                                                        'class'=> 'img-thumbnail'
                                                    ]
                                                )
                                            .Html::endTag('div');
                        }
                        $imageGroup[$i] .= Html::endTag('div');
                    }
                    echo Carousel::widget([
                        'items' => [
                            [
                                'content' => $imageGroup[0],
                                'caption' => '',
                            ],
                            [
                                'content' => $imageGroup[1],
                                'caption' => '',
                            ],
                            [
                                'content' => $imageGroup[2],
                                'caption' => '',
                            ],
                        ],
                    ]);
                    
                ?>
        </div>
    </div>
    <div class="clearfix">
    	<h3 class="divider index-divider"><?php echo FA::icon('circle-o'); ?></h3>
    </div>
</div>
