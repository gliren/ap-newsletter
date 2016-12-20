<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Apogee_Newsletter
 */

get_header(); ?>

<div class="container">
    <div class="row">
    	<br class="clearfix">
    	<div class="col-xs-12 col-lg-10 col-lg-offset-1">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

		endwhile; // End of the loop.
		?>
		<br class="clearfix">
		 <hr class="dash">
		 <img src="<?php bloginfo('stylesheet_directory');?>/images/global-images/ellen.jpg" alt="" class="alignleft img-circle img-responsive" width="100" height="100">
						 <div class="alignleft author">
								 <h5 class="h5">Ellen Robertson, MBA</h5>
								 <h6 class="subheading">Human Resources Administrator</h6>
						 </div>
	</div> <!-- col -->
</div> <!-- row -->
</div> <!-- container -->

<?php
get_footer();
