<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css" type="text/css" media="screen" title="no title">
        
		<style>
		.cycle-slideshow{
			padding-top:100px;
		}
		.cycle-slide{
			width:720px	;
			height:500px;
			padding-top:100px;
		}
		.downDiv{
			background:url('/_test/img/MOD600_Dark.jpg');
			width:720px	;
			height:500px;
		
		}
		
		#resizeDiv{
			background:url('/_test/img/MOD600_Light.jpg');
			width:720px;
			height:500px;
		}
		</style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
       
		
		
		<header>
			<div class="container_3">
				
				<div class="grid_1 alpha">
					<h1>weaponofchoice</h1>
				</div>
				<div class="grid_2 omega">
					<ul class="main-nav ">
						<li><a href="#profile">Profile</a></li>
						<li><a href="#work">Work</a></li>
						<li><a href="#archive">Archive</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</header>
		
		<section id="home" class="fullscreen">
			<div class="cycle-pager"></div>
			<div class="cycle-slideshow" data-cycle-fx="scrollHorz"  data-cycle-timeout="0" data-cycle-slides="> div"data-cycle-pager=".example-pager" >
				<div>
					<p>hallo</p>
				</div>
				<div class="downDiv">
					<div id="resizeDiv"></div>
				</div>
				<div>
					<p>hallo</p>
				</div>
				
			</div>
			<div class="example-pager"></div>
			
		</section>
		
		
		
		
		
		<footer>
			<div class="container_3">
				<div class="grid_1 alpha">
					<span class="lang">Nederlands / English</span>
				</div>
				<div class="grid_2 omega">
					<address class="right">
						<a href="mailto:info@weaponofchoice.nl">info@weaponofchoice.nl</a><br/>
						westzeedijk 453 3024 ek rotterdam<br/>
						the netherlands <a href="tel:0031 10 223 708">0031 10 223 708</a>
					</address>
				</div>
			</div>
		</footer>
		
	
		
		
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		<script src="js/vendor/jquery-ui-1.10.3.custom.min.js" type="text/javascript" ></script>
		<script src="js/vendor/jquery.cycle2.min.js" type="text/javascript" ></script>
		
        
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
		$(document).ready(function(){
			$('#resizeDiv')
			    //.draggable()
			    .resizable(
					{
					    handles: 'e, w'
					});
		})
			
		
			
           
        </script>
    </body>
</html>
