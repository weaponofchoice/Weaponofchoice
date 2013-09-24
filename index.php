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
			<div class="container_3">
				<h2 class="position-fixed">
					Weaponofchoice is een ontwerp<br/>
					bureau voor 2d en 3d, we creëren<br/> 
					doordachte visuele ervaringen op het<br/> 
					web, in print en in de fysieke ruimte.
				</h2>
			</div>
			
		</section>
		
		<section id="profile" class="fullscreen">
			<div class="container_3">
				<div class="profile-text">
					<h2>
						We geloven in de kracht van goede <br/>
						ideeën en een esthetische realisatie. <br/> 
						Ons team is toegewijd, flexibel en <br/> 
						werkt heel precies.
					</h2>
					<h3>
						We werken voor ondernemers, creatieve bureau's, <br/>
						de culturele sector en multinationals.<br/>
					</h3>
				</div>
			</div>
		</section>
		
		<section id="work" class="fullscreen">
		</section>
		
		<section id="archive" class="normal">
			
			
			<div class="container_3 mosaicflow" id="container" data-min-item-width="400">

			<?php foreach(glob("img/archive/*.{jpg,JPG,jpeg,JPEG,gif,GIF,png,PNG}",
			GLOB_BRACE) as $idx => $row):
			list($w, $h) = getimagesize($row);
			        if($idx % 3 == 1) {
			          $css_class = '';
			        } else {
			          $css_class = '';
			        }
			?>
			  <div class="mosaicflow__item<?php echo $css_class; ?>">
				 <img width="<?php echo $w; ?>" height="<?php echo $h; ?>" class="img-responsive" src="<?php echo $row; ?>" alt="Archive"></div>
			<?php endforeach; ?>
			
			</div>
			<div class="clearfix"></div>
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
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
