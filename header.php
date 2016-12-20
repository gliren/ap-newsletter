<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Apogee_Newsletter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://use.typekit.net/meo1kny.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/october.css" rel="stylesheet">
<?php wp_head(); ?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'apogee-newsletter' ); ?></a>

	<!-- Fixed navbar -->
<nav class="navbar navbar-light bg-faded navbar-static-top">

	<div class="container"> <a href="/"><img src="<?php bloginfo('stylesheet_directory');?>/images/global-images/logo_topofthecurve.svg" alt="Apogee Physicians // Top of the Curve Newsletter" class="global-logo visible-lg-block visible-md-block visible-sm-block hidden-xs"></a>
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a href="/"><img src="<?php bloginfo('stylesheet_directory');?>/images/global-images/logo_topofthecurve.svg" alt="Apogee Physicians // Top of the Curve Newsletter" class="mobile-logo visible-xs-block hidden-sm"></a> </div>

			<?php
				// wp_nav_menu(array(
				// 	'theme_location' => 'primary',
				// 	'container' => 'nav',
				// 	'container_id' => 'navbar',
				// 	'menu_class' => 'nav navbar-nav navbar-right'
				// ));

			?>

		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li id="article-collapse-header"><a class="navbar-toggler visible-lg-block visible-md-block visible-sm-block hidden-xs" data-toggle="collapse" href="#article-header" role="button" aria-expanded="false">Articles <span class="caret"></span></a></li>
				<li class="dropdown mobile-article-menu visible-xs-block"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Articles <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="featured.php">Featured</a></li>

						<?php
								$catquery = new WP_Query( 'cat=4&posts_per_page=1' );
								while($catquery->have_posts()) : $catquery->the_post();
								?>
								<li><a href="<?php the_permalink();?>">Safety Zone</a></li>
						<?php endwhile; ?>

						<li><a href="compliance.php">Compliance</a></li>
						<li><a href="critical-care.php">Critical Care</a></li>
                        <li><a href="alertsandtips.php">Alerts and Tips</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Departments <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="benefits.php">Benefits</a></li>
						<li><a href="human-resources.php">HR</a></li>
						<li><a href="physician-relations.php">Physician Relations</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inside Apogee <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="around-apogee.php">Around Apogee</a></li>
						<li><a href="bestofthebest.php">Best of the Best</a></li>
					</ul>
				</li>
			</ul>
		</div> <!-- #navbar
	</div>
</nav><!--end of nav-->
<div class="collapse row" id="article-header">
		<div class="container">
			<div class="row article-menu visible-lg-block visible-md-block visible-sm-block">
          <div class="col-xs-4 col-sm-2 col-lg-2" style="margin:0;"><a href="featured.php"><img src="<?php bloginfo('stylesheet_directory');?>/images/featured.jpg" alt=""/></a>
					<h4><a style="clear:both;" href="featured.php">Featured</a></h4></div>

					<?php
					$catquery = new WP_Query( 'cat=4&posts_per_page=1' );
					while($catquery->have_posts()) : $catquery->the_post();?>
					<div class="col-xs-4 col-sm-2 col-lg-2" style="margin:0;"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('feature-image');?></a>
					<h4><a style="clear:both;" href="<?php the_permalink();?>">Safety Zone</a></h4></div>
				<?php endwhile;?>


					<div class="col-xs-4 col-sm-2 col-lg-2" style="margin:0;"><a href="compliance.php"><img src="<?php bloginfo('stylesheet_directory');?>/images/compliance.jpg" alt=""></a>
					<h4><a style="clear:both;" href="compliance.php">Compliance</a></h4></div>
					<div class="col-xs-4 col-sm-2 col-lg-2" style="margin:0;"><a href="critical-care.php"><img src="<?php bloginfo('stylesheet_directory');?>/images/criticalcare.jpg" alt=""></a>
					<h4><a style="clear:both;" href="critical-care.php">Critical Corner</a></h4></div>
                    <div class="col-xs-4 col-sm-2 col-lg-2" style="margin:0;"><a href="alertsandtips.php"><img src="<?php bloginfo('stylesheet_directory');?>/images/alertsandtips_home.jpg" alt=""></a>
					<h4><a style="clear:both;" href="alertsandtips.php">Alerts &amp; Tips</a></h4></div>
		      </div>
        </div>
</div><!--end of article menu-->
</div>
