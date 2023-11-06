<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nurturant
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="content">
			
			<div class="inner-content grid-x grid-padding-x">
			
				<main class="main cell small-12 medium-12 large-8 large-offset-2" role="main">
			
					<?php
					while ( have_posts() ) :
						the_post();
			
						get_template_part( 'template-parts/content', get_post_type() );
						
					endwhile; // End of the loop.
					?>
					
				</main>
				
			</div>
			
		</div>

	</main><!-- #main -->

<?php
get_footer();