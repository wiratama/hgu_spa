<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>HGU Spa</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
<link href="css/menu.css" media="screen" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/animate.min.css">
<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
		if(!oldieCheck) {
		document.write('<script src="js/jquery-2.1.0.min.js"><\/script>');
		} else {
		document.write('<script src="js/jquery-1.11.0.min.js"><\/script>');
		}
</script>
    
    <script type="text/javascript" src="js/modernizr.custom.transform-media-queries.js"></script>
</head>
<body>
<div class="frontpage">
	<?php include_once 'include/top-button.php'; ?>
	<div class="menu-navigation">
	<header>
		<!-- regular menu -->
			<nav>
				<?php include_once 'nav.php'; ?>
				<div class="handle">
					<div class="thearrow"><img src="images/tarrow.png"></div>
					<div class="mtitle">SPA <br>MENU</div>
				</div>
			</nav>
		<!-- mobile menu -->
			<div class="mobile-nav">
				<?php include_once 'include/mobile-nav.php'; ?>
			</div>
	</header>
	</div>
	<div id="carousel-banner" class="carousel slide custom-h" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="images/img-2.jpg" alt="First slide">
			</div>
		</div>
	</div>
	<h2>HOME / ONCE IN A LIFETIME SPA EXPERIENCE </h2>
</div> 
<section>
	<div class="container content-holder">
		<div class="row">
			<div class="col-md-12">
				<h1>SPA MENU</h1>
<p>30° Spa Collection at Hanging Gardens Of Bali signature treatments
Recommended pressure : Strong, Medium, Gentle
Please inform your spa therapist if at any time you wish to increase or reduce the pressure of your treatment.</p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="content-pack">
	<div class="row model-pack-one">
		<div class="col-xs-12 col-md-8">
				<div id="carousel-spamenu" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/img-p4.jpg" alt="First slide">
						</div>
						<div class="item">
							<img src="images/img-p5.jpg" alt="Second slide">
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-spamenu" data-slide="prev">
						<span class="control-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-spamenu" data-slide="next">
						<span class="control-right"></span>
					</a>
				</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<h1>BODY THERAPY</h1>
			<p>An invigorating signature therapy to address tight muscle groups. Deep-tissue kneading, muscle manipulation and stretching techniques are applied to release body tension and stress. An excellent therapeutic massage for easing intense tiredness, muscular aches and fatigue after exercise or travel.</p>
			<a href=""><i class="fa fa-arrow-down"></i>BROCHURE</a><a href="">RESERVE NOW</a>
		</div>
	</div>
	<div class="row model-pack-two">
		<div class="col-xs-12 col-md-8">
				<div id="carousel-bodytherapy" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/img-p5.jpg" alt="First slide">
						</div>
						<div class="item">
							<img src="images/img-p4.jpg" alt="Second slide">
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-bodytherapy" data-slide="prev">
						<span class="control-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-bodytherapy" data-slide="next">
						<span class="control-right"></span>
					</a>
				</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<h1>SPA PACKAGES</h1>
			<p>This head to toe detoxifying and rejuvenating therapy leaves you feeling totally refreshed and energized.
A relaxing and de-stressing therapy for tired or tense body and skin, promotes deep relaxation and calmness from within.</p>
			<a href=""><i class="fa fa-arrow-down"></i>BROCHURE</a><a href="">RESERVE NOW</a>
		</div>
	</div>
	</div>
</section>
<section>
	<div class="foot-fixed"></div>
	<div class="inside-footer">
	<?php include_once 'include/footer.php'; ?>
	</div>
</section>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/default.randheli.min.js"></script>
<script>
        var app = null;
        $(function(){
            app = new App({
                header_open : true
            });
        });
    </script>
</body>
</html>