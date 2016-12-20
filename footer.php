<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Apogee_Newsletter
 */

?>

<?php wp_footer(); ?>

<br class="clearfix">

	<div class="faq-footer">
	<div class="container">
	<div class="col-xs-12 col-sm-12">
	<h3 class="white"><a href="faq/" style="color: white; padding-left: 10px;" onmouseover="this.style.color='#004b8d'" onmouseout="this.style.color='white'">Questions for the home office?</a></h3>
	<hr>
	<p>If you have an article or an image you like to submit, please email:<a href="mailto:newsletter@apogeephysicians.com?Subject=Newsletter%20Submission" class="white" style="font-family:'museo-sans', sans-serif;">&nbsp;newsletter@apogeephysicians.com</a></p>
	<p>For social media submissions, please contact<a href="mailto:mickelle.murphy@apogeephysicians.com?Subject=Social%20MediaSubmission" class="white" style="font-family:'museo-sans', sans-serif;"> Mickelle Murphy</a></p>
	</div>
	</div>
	</div>
<footer>
	<div class="container">
	<div class="visible-lg-block visible-md-block visible-sm-block hidden-xs">
	<div class="col-xs-12 col-sm-3">
	<h4 class="white">Articles</h4>
	<ul>
		<li><a href="featured.php">Featured</a></li>
		<li><a href="safety-zone.php">Safety Zone</a></li>
		<li><a href="compliance.php">Compliance Corner</a></li>
		<li><a href="critical-care.php">Critical Corner</a></li>
        <li><a href="alertsandtips.php">Alerts &amp; Tips</a></li>
	</ul>
	</div>
	<div class="col-xs-12 col-sm-3">
	<h4 class="white">Departments</h4>
	<ul>
		<li><a href="benefits.php">Benefits</a></li>
		<li><a href="human-resources.php">HR</a></li>
		<li><a href="physician-relations.php">Physician Relations</a></li>
	</ul>
	</div>
	<div class="col-xs-12 col-sm-3">
	<h4 class="white">Inside Apogee</h4>
	<ul>
		<li><a href="around-apogee.php">Around Apogee</a></li>
		<li><a href="bestofthebest.php">Best of the Best</a></li>
	</ul>
	</div>
	<div class="col-xs-12 col-sm-3">
	<h4><a href="faq/">FAQ</a></h4>
	<h4><a href="../../">Archive</a></h4>
  <img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/logo_gray.png" alt="" style="display:block; width: 60%; margin: 20px 0;">
	</div>
	<hr>
	</div>
	<div class="col-xs-12 col-sm-12">

		<p class="aligncenter"><i class="fa fa-copyright"></i> 2012-2016 Apogee Physicians. All Rights Reserved.</p>
		</div>
		</div>
	</footer>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php bloginfo('template_directory');?>/js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory');?>/js/jquery.min.js"><\/script>')</script>
<script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php bloginfo('template_directory');?>/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
