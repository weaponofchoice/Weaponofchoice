<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=9">
  
  <?php echo css('assets/css/normalize.css') ?>
  <?php echo css('assets/css/main.css') ?>
  <?php echo js('/assets/js/vendor/modernizr-2.6.2.min.js') ?>

  <?php echo js('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') ?>
  <?php echo js('assets/js/vendor/jquery-1.10.2.min.js') ?>
	

</head>

<body >

	<header>
		<div class="container_3">
			
			<div class="grid_1 alpha">
				<h1><a href="/" title="Home">weaponofchoice</a></h1>
			</div>
			<div class="grid_2 omega menu-bar">
				<ul class="main-nav ">
					<li><a class="nav-profile" href="#profile">Profile</a></li>
					<li><a class="nav-work" href="#work">Work</a></li>
					<li><a class="nav-archive"> Archive</a></li>
					<li><a class="nav-contact" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
  