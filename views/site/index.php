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
    <div class="item active">
      <img src="https://www.jakartanotebook.com/images/banners/new-arrival-skmei.jpg" alt="Chania">
      <div class="carousel-caption">
	  Nggak Cuma Bergaya Keren, 5 Model Dunia Ini Juga Jago Motret!
      </div>
    </div>

    <div class="item">
      <img src="https://www.jakartanotebook.com/images/banners/tiap-hari-murah-sabtu.jpg" alt="Chicago">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="https://www.jakartanotebook.com/images/banners/Sandisk-Cruzer-Glide-USB-Flashdisk1.jpg" alt="New York">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>

    <div class="body-content">

      
            <div>
			<table>
			
			<tr style="border-bottom:1px solid #b302b5;">
			<td width="70%">
			<p style="color:Turquoise; font-size:1.0em; font-family:Arial Black; margin-left:5px;">Workout</p>
			<p style="color:#b302b5; font-size:1.0em; font-family:Arial; font-weight:bold; margin-left:5px;">Ketahui Betapa Spesial-nya Dirimu Lewat 5 Hal Ini</p>
			</td>
			<td width="30%"><img width="100%" src="https://cdn.popbela.com/content-images/post/20170904/18382344-1777277315860908-2778590244168007680-n-f1837c0e793e3feb6b91a0997f28ab26_390x260.jpg"></td>
			</tr>
			
			<tr style="border-bottom:1px solid #b302b5;">
			<td width="70%">
			<p style="color:Turquoise; font-size:1.0em; font-family:Arial Black; margin-left:5px;">Inspiration</p>
			<p style="color:#b302b5; font-size:1.0em; font-family:Arial; font-weight:bold; margin-left:5px;">Nggak Cuma Bergaya Keren, 5 Model Dunia Ini Juga Jago Motret!</p>
			</td>
			<td width="30%"><img width="100%" src="https://cdn.popbela.com/content-images/post/20170911/4931031f2d8e-243a09312c9d31a83df63c28e7576679_750x500.jpg"></td>
			</tr>
                 
</table>
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
        'autoplay'          => false,
        'autoplayTimeout'   => 3000,
        'items'             => 2,
        'loop'              => true,
        'itemsDesktop'      => [1199, 3],
        'itemsDesktopSmall' => [979, 3]
    ]
]);
?>

<div class="item-class"><img src="https://cdn.popbela.com/content-images/post/20160209/fanpop-3bb88d192b155d91e6a42b58bedf9f54_200x200.jpg" alt="Image 1"></div>
<div class="item-class"><img src="https://cdn.popbela.com/content-images/post/20160826/8-patricksponauglecom-ebce34e82dfad927d3c17b439c8c6d3a_200x200.jpg" alt="Image 2"></div>
<div class="item-class"><img src="https://cdn.popbela.com/content-images/post/20160204/magic4wallscom-ad4d0df980402ec5cc00dd9d8a38dcf5_200x200.jpg" alt="Image 3"></div>



<?php OwlCarouselWidget::end(); ?>
			 </div>
            
            


    </div>
</div>
