<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset=" <?php bloginfo("charset"); ?> ">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href=" <?php echo get_stylesheet_uri(); ?> ">
		<title> <?php bloginfo("name"); ?> </title>
		<?php // NEEDED FOR PLUGINS ?>
		<?php //wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div class="container">

			<!-- navigation menu -->
			<nav class="site-nav">
				<?php 
					$args = array("theme_location" => "primary");
					wp_nav_menu($args); 
				?>
			</nav>

			<!-- site header -->
			<div class="site-header">
				<h1>
					<a href=" <?php echo home_url(); ?> " id="blogTitle">
						<?php bloginfo("name"); ?>
					</a>
				</h1>
				<h5>
					<?php bloginfo("description"); ?>
				</h5>

			</div>
