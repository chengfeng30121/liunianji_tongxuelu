<?php
require_once('azcommon.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?=C('webname')?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

  	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  	<link rel="shortcut icon" href="favicon.ico">

  	<!-- Google Webfont -->
	<link href='http://fonts.useso.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="n/css/themify-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="n/css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="n/css/owl.carousel.min.css">
	<link rel="stylesheet" href="n/css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="n/css/magnific-popup.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="n/css/superfish.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="n/css/easy-responsive-tabs.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="n/css/animate.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="n/css/style.css">

	<!-- Modernizr JS -->
	<script src="n/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

		<!-- START #fh5co-header -->
		<header id="fh5co-header-section" role="header" class="" >
			<div class="container">

				

				<!-- <div id="fh5co-menu-logo"> -->
					<!-- START #fh5co-logo -->
					
					
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						
						
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="#">首页</a>
							</li>
							<li><a href="login.php">登陆</a></li>
							<li><a href="reg.php">注册</a></li>
									
									
						</ul>
					</nav>
				<!-- </div> -->

			</div>
		</header>
		
		
		<div id="fh5co-hero">
			<a href="#fh5co-main" class="smoothscroll fh5co-arrow to-animate hero-animate-4"><i class="ti-angle-down"></i></a>
			<!-- End fh5co-arrow -->
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro">
							<h1 class="to-animate hero-animate-1"><?=C('name')?></h1>
							<h2 class="to-animate hero-animate-2">人性化的设计，让你更方便快捷！</h2>
						<?php
				
				if(!C('loginuid')){
	            echo'<p class="to-animate hero-animate-3"><a href="login.php" class="btn btn-outline btn-lg">登陆</a><a href="reg.php" class="btn btn-outline btn-lg">注册</a></p>
				     ';
}else{
        echo '<p class="to-animate hero-animate-3"><a href="/home" class="btn btn-outline btn-lg">用户中心</a></p>';
    }
?>
							
						</div>
					</div>
				</div>
			</div>		
		</div>
		<br><br><br><br><br>
		
        
		<div id="fh5co-main">
	
			<div class="container">
				<div class="row" id="fh5co-features">
					
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box">
						<div class="fh5co-feature-icon">
							<i class="ti-mobile"></i>
						</div>
						<h3 class="heading">响应式模板</h3>
						<p>不管你是移动设备还是电脑，都可以自试应网站模板，以达到不过电脑还是手机都可以访问本站的效果！</p>
					</div>
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box"> 
						<div class="fh5co-feature-icon">
							<i class="ti-lock"></i>
						</div>
						<h3 class="heading">安全系统</h3>
						<p>本站采用登陆机制，信息加密储存，100%保证您的信息不会泄露！</p>
					</div>

					<div class="clearfix visible-sm-block"></div>

					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box"> 
						<div class="fh5co-feature-icon">
							<i class="ti-palette"></i>
						</div>
						<h3 class="heading">多套模板</h3>
						<p>本站有多套精美的响应式模板，可以在后台选择，为您的网站填彩！</p>
					</div>

					<div class="clearfix visible-md-block visible-lg-block"></div>

					
				</div>
				<!-- END row -->

				<div class="fh5co-spacer fh5co-spacer-md"></div>
				<!-- End Spacer -->

				
				<!-- END row -->
				
				<div class="fh5co-spacer fh5co-spacer-md"></div>
				<div class="row">
					<!-- Start Slider Testimonial -->
	            <h2 class="fh5co-uppercase-heading-sm text-center animate-box">...微语...</h2>
	            <div class="fh5co-spacer fh5co-spacer-xs"></div>
	            <div class="owl-carousel-fullwidth animate-box">
	            <div class="item">
	              <p class="text-center quote">&ldquo;这不只是一个普通的同学录系统，更是一个人性化的服务！ &rdquo; <cite class="author">&mdash;<?=C('webbq')?></cite></p>
	            </div>
	            <div class="item">
	              <p class="text-center quote">&ldquo;这不只是一个普通的同学录系统，更是一个人性化的服务！ &rdquo; <cite class="author">&mdash;<?=C('webbq')?></cite></p>
	            </div>
	            <div class="item">
	              <p class="text-center quote">&ldquo;这不只是一个普通的同学录系统，更是一个人性化的服务！ &rdquo; <cite class="author">&mdash;<?=C('webbq')?></cite></p>
	            </div>
	          </div>
	           <!-- End Slider Testimonial -->
				</div>
				<!-- END row -->
				<div class="fh5co-spacer fh5co-spacer-md"></div>

			</div>
			<!-- END container -->

		
		</div>
		<!-- END fhtco-main -->


		

		<footer role="contentinfo" id="fh5co-footer">
			<a href="#" class="fh5co-arrow fh5co-gotop footer-box"><i class="ti-angle-up"></i></a>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 footer-box">
						<h3 class="fh5co-footer-heading">About us</h3>
						<p>同学录，顾名思义，是记录一个班级或者一个集体同学的家庭地址，联系方式，电话号码，个性语言等等，以达到方便联系，同学之间相互了解，回忆过去的作用。新的网络时代，同学录多种多样.</p>
						

					</div>

					
<h3 class="fh5co-footer-heading">看我们的影片</h3>
				<p style="text-align: center"><iframe class="video_iframe" style="z-index:1;" src="http://v.qq.com/iframe/player.html?vid=<?=C('spvid')?>&amp;width=300&amp;height=200&amp;auto=0" allowfullscreen="" frameborder="0" height="200" width="300"></iframe></p>
					<div class="col-md-12 footer-box">
						<div class="fh5co-copyright">
						<p>&copy; 2016 <?=C('webname')?> All Rights Reserved.<a href="#"><?=C('webbq')?></a>
特别鸣谢似水全体程序员提供的原程序
						</div>
					</div>
					
				</div>
				<!-- END row -->
				<div class="fh5co-spacer fh5co-spacer-md"></div>
			</div>
		</footer>
			
			
		<!-- jQuery -->
		<script src="n/js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="n/js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="n/js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="n/js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="n/js/jquery.magnific-popup.min.js"></script>
		<!-- Superfish -->
		<script src="n/js/hoverIntent.js"></script>
		<script src="n/js/superfish.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="n/js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="n/js/fastclick.js"></script>
		<!-- Parallax -->
		<script src="n/js/jquery.parallax-scroll.min.js"></script>
		<!-- Waypoints -->
		<script src="n/js/jquery.waypoints.min.js"></script>
		<!-- Main JS -->
		<script src="n/js/main.js"></script>

	</body>
</html>
<SCRIPT Language=VBScript>