<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Animated Background Headers | Demo 1</title>
		<meta name="description" content="Examples for creative website header animations using Canvas and JavaScript" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/queryLoader.css" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body id="main_body">
		<div class="container demo-1" id="main_event" style="display:none">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<!-- <h1 class="main-title">Across <span class="thin">Seconds</span></h1> -->
					<h1 class="main-title"><img src="img/main_logo.png"></h1>
				</div>
			</div>
		</div><!-- /container -->

		<p>
			test
		</p>

		<div class="container" id="start_event" style="display:none">
			<div class="os-phrases" id="os-phrases">
				<h2>Some text</h2>
				<h2>Some Awesome Text</h2>
				<h2>This January</h2>
				<h2>Can You Foresee?</h2>
			</div>
		</div><!-- /container -->

		<!-- hi guys -->

		<script src="js/TweenLite.min.js"></script>
		<script src="js/EasePack.min.js"></script>
		<script src="js/rAF.js"></script>
		<script src="js/demo-1.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/jquery.lettering.js"></script>
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js'></script>
		<script src="js/queryLoader.js"></script>

		<script>
			QueryLoader.selectorPreload = "#main_body";
			QueryLoader.init();

			$(document).ready(function() {

				$("#main_event").hide();
				//$("#start_event").show();
				//$("#os-phrases > h2").lettering('words').children("span").lettering().children("span").lettering();
				$("#main_event").fadeIn(3000);


			})
		</script>
	</body>
</html>
