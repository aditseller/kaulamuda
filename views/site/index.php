<?php
use kv4nt\owlcarousel\OwlCarouselWidget;
/* @var $this yii\web\View */

$this->title = Yii::$app->params['siteName'];
?>
<div class="site-index">

   <div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
		 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active" style="height:212px;">
      <img style="width:100%;" src="https://cdn.popbela.com/content-images/post/20170915/castillo-guijarro-isabel-womensmarch-byisabel-1-ebe089a341e73eea390ce9b76d78d05f_750x500.png" alt="Chania">
      <div class="carousel-caption">
	  Nggak Cuma Bergaya Keren, 5 Model Dunia Ini Juga Jago Motret!
      </div>
    </div>

    <div class="item" style="height:212px;">
      <img style="width:100%;" src="https://cdn.popbela.com/content-images/post/20170913/untitled-design-2aefb24b06475572cc28873c9c0282ec_750x500.jpg" alt="Chicago">
        <div class="carousel-caption">
	  Nggak Cuma Bergaya Keren, 5 Model Dunia Ini Juga Jago Motret!
      </div>
    </div>

    <div class="item" style="height:212px;">
      <img style="width:100%;" src="https://woop.id/media/TARA/WEAR/Hoodie_dan_Terlihat_Lebih_Gaya.jpg" alt="New York">
        <div class="carousel-caption">
	  Nggak Cuma Bergaya Keren, 5 Model Dunia Ini Juga Jago Motret!
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left " href="#myCarousel" data-slide="prev">
  </a>
  <a class="right " href="#myCarousel" data-slide="next">
  </a>
</div>
    </div>

    <div class="body-content">

      
            <div style="margin-top:10px;">
			
       <iframe src="<?= Yii::$app->urlManager->createUrl(['site/infinite']) ?>" width="100%" height="220" scrolling="yes" frameborder="no">
</iframe>
             </div>
			 
			 <div>
			<?php


OwlCarouselWidget::begin([
    'container' => 'div',
    'containerOptions' => [
        'id' => 'container-id',
        'class' => 'container-class'
    ],
    'pluginOptions'    => [
        'autoplay'          => true,
        'autoplayTimeout'   => 3000,
        'items'             => 2,
        'loop'              => true,
        'itemsDesktop'      => [1199, 3],
        'itemsDesktopSmall' => [979, 3]
    ]
]);
?>

<div class="item-class" style="margin-left:1%; margin-right:1%;">
<img style="" src="https://cdn.popbela.com/content-images/post/20160209/fanpop-3bb88d192b155d91e6a42b58bedf9f54_200x200.jpg" alt="Image 1">
<div style="width:100%; height:80px; opacity:.8; background:#ffffff;">
<div style="color:#000000; font-size:1.0em; font-family:Open Sans; margin-top:-100px; margin-left:3%;">
<?php
$num_char = 45;
$text = '5 Cara Bangkitkan Kepercayaan Diri Tanpa Terlihat ‘Maksa’';
echo substr($text, 0, $num_char) . '...';
?>
</div>

<a href="https://www.popbela.com/themes/popbela/v1/desktop/assets/img/logo.png">
<img style="width:50%; margin-left:3%;" src="https://www.popbela.com/themes/popbela/v1/desktop/assets/img/logo.png">
</a>
</div>

</div>
<div class="item-class" style="margin-left:1%; margin-right:1%;">
<img src="https://cdn.popbela.com/content-images/post/20160826/8-patricksponauglecom-ebce34e82dfad927d3c17b439c8c6d3a_200x200.jpg" alt="Image 2">
<div style="width:100%; height:80px; opacity:.8; background:#ffffff;">
<div style="color:#000000; font-size:1.0em; font-family:Open Sans; margin-top:-100px; margin-left:3%;">
<?php
$num_char = 45;
$text = '7 Hal Ini yang Harus Kamu Lakukan Sebelum Jadi Istri Orang';
echo substr($text, 0, $num_char) . '...';
?>
</div>
<a href="https://woop.id/images/logo.png">
<img style="width:50%; margin-left:3%;" src="https://woop.id/images/logo.png">
</a>
</div>
</div>
<div class="item-class" style="margin-left:1%; margin-right:1%;">
<img src="https://cdn.popbela.com/content-images/post/20160204/magic4wallscom-ad4d0df980402ec5cc00dd9d8a38dcf5_200x200.jpg" alt="Image 3">
<div style="width:100%; height:80px; opacity:.8; background:#ffffff;">
<div style="color:#000000; font-size:1.0em; font-family:Open Sans; margin-top:-100px; margin-left:3%;">
<?php
$num_char = 45;
$text = 'Kreatif! Wanita Ini Bikin Riasan Dongeng Disney yang Beda Banget';
echo substr($text, 0, $num_char) . '...';
?>

</div>
<a href="https://www.popbela.com/themes/popbela/v1/desktop/assets/img/logo.png">
<img style="width:50%; margin-left:3%;" src="https://www.popbela.com/themes/popbela/v1/desktop/assets/img/logo.png">
</a>
</div>
</div>



<?php OwlCarouselWidget::end(); ?>

<section style="position: fixed; bottom: 0px; width: 100%; z-index:1; height:35px; ">
 <p style="margin: 0 auto; width:100%; background:#ffffff; color:#000000; font-size:1.2em; height:58px; ">
 <marquee behavior="scroll" direction="left" style="margin-top:15px;">5 Cewek Ini Buktikan Kalau Cantik Itu Milik Semua Orang</marquee>
 </p>
</section>
			 </div>
            
            

    </div>
</div>



