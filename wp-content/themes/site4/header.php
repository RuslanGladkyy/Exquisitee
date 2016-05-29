<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/fonts/georgia.ttf">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/fonts/Tahoma.ttf">
</head>
<body>
	<div class="fon">
		<div class="container">
			<div class="row header">
				<div class="col-sm-5 col-lg-5">
					<a href="<?php echo home_url(); ?>"><img class="logo" src="<?php bloginfo('template_url') ?>/img/logo.png" alt="logo"></a>
					<div class="text">
						<h1>Welcome.</h1>
						<h2><?php bloginfo('description') ?></h2>
					</div>
				</div>
				<div class="col-sm-7 col-lg-6">

<?php  wp_nav_menu(array('theme_location' => 'menu',
						'container' => 'div',
						'container_class' => 'menu'
						)); ?>
						
					<div  class="slay">
						<img class="slayder" src="<?php bloginfo('template_url') ?>/img/slayder.png" alt="slayder">
						<!--
						<img class="imgslayd" src="img/10.png">
 						<img class="imgslayd" src="img/100.png">
						<img class="imgslayd" src="img/101.png"> 
						<a href="#"><img class="left" src="img/left.png"></a>
						<a href="#"><img class="right" src="img/right.png"></a>-->

					</div>

					<div>
					<h6 class="slayd1">RECENT PROJECTS: Car in the desert</h6>
					<h6 class="slayd2">click to view fullscreen</h6>
					</div>
				</div>
			</div>		
		</div>
	</div>