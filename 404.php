<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-center">
				<div class="cell small-12 tablet-10">

					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', '_s' ); ?></h1>
						</header><!-- .page-header -->
			
						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Please the use main navigation to find a page that does.', '_s' ); ?></p>
							
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
					
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();