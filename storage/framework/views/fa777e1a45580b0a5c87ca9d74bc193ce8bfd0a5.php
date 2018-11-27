<?php
	if(Session::has('locale')) 
	{
		$locale = Session::get('locale'); 
		App::setLocale($locale); 
	}else{
        App::setLocale('en'); 
        $locale = 'en';
    }
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> 
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'> 
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>"> 	
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-toggle.min.css')); ?>"> 
        <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>"> 
        <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.css')); ?>"> 
        <link rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>"> 
        <link rel="stylesheet" href="<?php echo e(asset('css/jquery-ui.css')); ?>"> 
        <link rel="stylesheet" href="<?php echo e(asset('css/meanmenu.min.css')); ?>"> 
        <link rel="stylesheet" href="<?php echo e(asset('css/venobox.css')); ?>"> 
        <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>"> 
		<link rel="stylesheet" href="<?php echo e(asset('lib/nivo-slider/css/nivo-slider.css')); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo e(asset('lib/nivo-slider/css/preview.css')); ?>" type="text/css" media="screen" /> 
        <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>"> 
        <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>"> 	
        <script src="<?php echo e(asset('js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
    </head>
    <body> 
        <!--Header Area Start-->
        <header>
            <?php echo $__env->make('main.top', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('main.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </header>
        <!--End of Header Area-->
        <!--Slider Area Start-->
        <div class="slider-area">
            <div class="preview-2">
                <div id="nivoslider" class="slides">	
                    <img src="<?php echo e(asset('img/slider/6.png')); ?>" alt="" title="#slider-1-caption1"/>
                    <img src="<?php echo e(asset('img/slider/1.png')); ?>" alt="" title="#slider-1-caption2"/>
                </div> 
                <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                    <div class="banner-content slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-7">
                                    <div class="text-content hidden-xs">
                                        <h1 class="title1" style="text-shadow: 1px 1px 1px white;">Education for Kids</h1>
                                        <p class="sub-title" style="text-shadow: 1px 1px 1px white;"><?php echo e(__('menu.description')); ?></p>
                                        <div class="banner-readmore">
                                            <a title="Read more" href="#">Enroll your child</a>	
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
                <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                    <div class="banner-content slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-7">
                                    <div class="text-content slide-2 hidden-xs">
                                        <h1 class="title1" style="text-shadow: 1px 1px 1px white;">Education for Kids</h1>
                                        <p class="sub-title" style="text-shadow: 1px 1px 1px white;"><?php echo e(__('menu.description')); ?></p>
                                        <div class="banner-readmore">
                                            <a title="Read more" href="#">Enroll your child</a>	
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	  
            </div>
        </div>
        <!--End of Slider Area-->
        <!--Activity Area Start-->
        <div class="activity-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 activity">
                        <div class="single-activity">
                            <div class="single-activity-icon">
                                <i class="fa fa-gamepad"></i>
                            </div>
                            <h4><?php echo e(__('menu.funnygame')); ?></h4>
                            <p><?php echo e(__('menu.funnygamedes')); ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 activity">
                        <div class="single-activity">
                            <div class="single-activity-icon">
                                <i class="fa fa-fort-awesome"></i>
                            </div>
                            <h4><?php echo e(__('menu.toy')); ?></h4>
                            <p><?php echo e(__('menu.toydes')); ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 activity">
                        <div class="single-activity">
                            <div class="single-activity-icon">
                                <i class="fa fa-futbol-o"></i>
                            </div>
                            <h4><?php echo e(__('menu.showact')); ?></h4>
                            <p><?php echo e(__('menu.showactdes')); ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm activity">
                        <div class="single-activity">
                            <div class="single-activity-icon">
                                <i class="fa fa-pencil"></i>
                            </div>
                            <h4><?php echo e(__('menu.edu')); ?></h4>
                            <p><?php echo e(__('menu.edudes')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Activity Area-->
        <!--Advertise Area Start-->
        <div class="advertise-area text-center section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo e(__('menu.enroll')); ?></h2>
                        <a href="#"><?php echo e(__('menu.joinus')); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Advertise Area--> 

        <!--Register Area Start-->
        <div class="register-area" style="background-image: url('img/slider/1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="register-info">
                            <h4>IT IS TIME TO SAY  <span>WELCOME 2019</span></h4>
                            <h1>HAPPY NEW YEAR</h1>
                            <div class="timer">
                                <div data-countdown="2018/12/31" class="timer-grid"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="account-form">
                            <div class="register-title">
                                <i class="fa fa-user"></i>
                                <h4>Our Channel</h4>
                            </div>
                            <div>
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/1Re_G1RUivI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Register Area-->
        <!--Service Area Start-->
        <div class="service-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3><?php echo e(__('menu.service')); ?></h3>
                                <p></p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="single-service-item-wrapper">
                            <div class="single-service-item">
                                <div class="single-service-text">
                                    <h4><?php echo e(__('menu.food')); ?></h4>
                                    <p><?php echo e(__('menu.fooddes')); ?></p>
                                </div>
                                <div class="single-service-icon">
                                    <i class="fa fa-cutlery"></i>
                                </div>
                            </div>
                            <div class="single-service-item">
                                <div class="single-service-text">
                                    <h4><?php echo e(__('menu.language')); ?></h4>
                                    <p><?php echo e(__('menu.languagedes')); ?></p>
                                </div>
                                <div class="single-service-icon">
                                    <i class="fa fa-language"></i>
                                </div>
                            </div>
                            <div class="single-service-item">
                                <div class="single-service-text">
                                    <h4><?php echo e(__('menu.transport')); ?></h4>
                                    <p><?php echo e(__('menu.transportdes')); ?></p>
                                </div>
                                <div class="single-service-icon">
                                    <i class="fa fa-bus"></i>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="service-image">
                            <img src="img/banner/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-service-item-wrapper">
                            <div class="single-service-item">
                                <div class="single-service-icon">
                                    <i class="fa fa-calendar-check-o"></i>
                                </div>
                                <div class="single-service-text">
                                    <h4><?php echo e(__('menu.fullday')); ?></h4>
                                    <p><?php echo e(__('menu.fulldaydes')); ?></p>
                                </div>
                            </div>
                            <div class="single-service-item">
                                <div class="single-service-icon">
                                    <i class="fa fa-bookmark"></i>
                                </div>
                                <div class="single-service-text">
                                    <h4><?php echo e(__('menu.special')); ?></h4>
                                    <p><?php echo e(__('menu.specialdes')); ?></p>
                                </div>
                            </div>
                            <div class="single-service-item">
                                <div class="single-service-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="single-service-text">
                                    <h4><?php echo e(__('menu.special2')); ?></h4>
                                    <p><?php echo e(__('menu.special2des')); ?></p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--End of Service Area-->  
        <!--Gallery Area Start-->
        <div class="gallery-area section-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3><?php echo e(__('menu.gallery')); ?></h3> 
                                <p></p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-menu">
                            <ul>
                                <li class="filter" data-filter="all">All</li>
                                <li class="filter" data-filter=".drawing">Drawing</li>
                                <li class="filter" data-filter=".excursions">Excursions</li>
                                <li class="filter" data-filter=".courses">Courses</li>
                                <li class="filter" data-filter=".play">Play time</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row gallery-row">
                    <div class="filter-items">
                        <div class="mix single-items drawing col-md-3 col-sm-6 col-xs-12 overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="img/gallery/1.jpg" alt=""></a> 
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/1.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Drawings</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix single-items play courses col-md-3 col-sm-6 col-xs-12 overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="img/gallery/2.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/2.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Activities, Photos</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix single-items play col-md-3 col-sm-6 col-xs-12 overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="img/gallery/3.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/3.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Play Time</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix single-items play excursions col-md-3 col-sm-6 col-xs-12 overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="img/gallery/4.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/4.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Excursions, Play</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix single-items courses excursions col-md-3 col-sm-6 col-xs-12 overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="img/gallery/5.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/5.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Courses, Exursions</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix single-items drawing col-md-3 col-sm-6 col-xs-12 overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="img/gallery/9.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/9.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Drawing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix single-items courses excursions col-md-3 col-sm-6 col-xs-12 overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="img/gallery/6.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/6.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Excursions, Courses</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix single-items drawing excursions col-md-3 col-sm-6 col-xs-12 overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="img/gallery/8.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/8.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Drawing, Exursions</span>
                                </div>
                            </div>
                        </div>                                   
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="view-gallery text-center">
                            <h4><?php echo e(__('menu.viewgallery')); ?></h4>
                            <a href="#" class="button-default"> <?php echo e(__('menu.viewnow')); ?> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Gallery Area-->  
        <!--Google Map Area Start -->
        <div class="google-map-area">
            <!--  Map Section -->
            <div id="contacts" class="map-area">
                <div id="googleMap" style="width:100%;height:451px;"></div>
            </div>
        </div>
        <!--End of Google Map Area-->
        <!--Footer Area Start-->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-info-container text-center section-padding">
                            <div class="footer-logo"> 
                                <?php if($locale=='th'): ?>
                                <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('img/logo/th.png')); ?>" alt="โรงเรียนอนุบาลนานาชาติตากสินระยอง"></a>
                                <?php else: ?>
                                <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('img/logo/en.png')); ?>" alt="โรงเรียนอนุบาลนานาชาติตากสินระยอง"></a> 
                                <?php endif; ?> 
                            </div>
                            <div class="footer-info">
                                <span><i class="fa fa-map-marker"></i>@12.693248,101.2793118</span>
                                <span><i class="fa fa-envelope"></i>anubantaksinrayong@gmail.com</span>
                                <span><i class="fa fa-phone"></i>038 617 430</span>
                            </div>
                            <div class="footer-info">
                                <span><?php echo e(__('menu.address')); ?></span>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-container">
                            <div class="row">
                                <div class="col-md-6">
                                    <span>&copy; 2019 @Anuban  Taksin Rayong. All rights reserved</span> 
                                </div>
                                <div class="col-md-6">
                                    <div class="social-links">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Footer Area-->
        
         	
        <script src="<?php echo e(asset('js/vendor/jquery-1.12.3.min.js')); ?>"></script> 	
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script> 	
        <script src="<?php echo e(asset('js/bootstrap-toggle.min.js')); ?>"></script>    
		<script src="<?php echo e(asset('lib/nivo-slider/js/jquery.nivo.slider.js')); ?>" type="text/javascript"></script>
		<script src="<?php echo e(asset('lib/nivo-slider/home.js')); ?>" type="text/javascript"></script> 	
        <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script> 	
        <script src="<?php echo e(asset('js/jquery.meanmenu.js')); ?>"></script> 	
        <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script> 		
        <script src="<?php echo e(asset('js/jquery.countdown.min.js')); ?>"></script> 	
        <script src="<?php echo e(asset('js/jquery.scrollUp.min.js')); ?>"></script> 	
        <script src="<?php echo e(asset('js/waypoints.min.js')); ?>"></script> 	
        <script src="<?php echo e(asset('js/jquery.counterup.min.js')); ?>"></script> 	
        <script src="<?php echo e(asset('js/slick.min.js')); ?>"></script> 	
        <script src="<?php echo e(asset('js/jquery.mixitup.js')); ?>"></script> 	
        <script src="<?php echo e(asset('js/venobox.min.js')); ?>"></script> 	
        <script src="<?php echo e(asset('js/plugins.js')); ?>"></script> 
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnT63XUjqjPgXZ0lFTU_pdpfUX7swzTTM"></script>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(12.693248,101.2793118)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);


			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map-marker.png',
				map: map
			  });
                
			}
                
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>	 	
        <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    </body>
</html>