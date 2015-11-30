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
<link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
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
    <link href="css/menu.css" media="screen" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="js/modernizr.custom.transform-media-queries.js"></script>
</head>
<body>
<div class="frontpage">
	<?php include_once 'include/top-button.php'; ?>
	<div class="menu-navigation">
		<header>
			<nav>
				<?php include_once 'nav.php'; ?>
				<div class="handle">
					<div class="thearrow"><img src="images/tarrow.png"></div>
					<div class="mtitle">360° Spa <br> Collection</div>
				</div>
			</nav>
		</header>
	</div>
	<div class="pic1">
		<a href="spa-suite.php" class="hvr-grow"><h1>THE SPA COLLECTION</h1></a>
	</div>
	<div class="pic2">
		<a href="spa-menu.php"><h1>SPA MENU</h1></a>
	</div>
	<div class="pic3">
		<a href="spa-experience.php"><h1>UNIQUE SPA <br>EXPERIENCES</h1></a>
	</div>
</div> 
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				DISCOVER TO HANGING GARDENS OF BALI
			</div>
		</div>
	</div>
</footer>   
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