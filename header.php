<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nurturant
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=BioRhyme&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
	
	<?php $background_pattern_image = get_field('background_pattern_image') ?? null;?>
</head>

<body <?php body_class(); if($background_pattern_image) { echo 'style="background-image: url(' . $background_pattern_image . '"';};?>>
	<?php wp_body_open(); ?>
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nurturant' ); ?></a>
		
			<div class="sticky-container">
				<header class="site-header" role="banner" data-sticky data-margin-top="0" data-sticky-on="small">
					<?php get_template_part( 'template-parts/nav', 'offcanvas-topbar' ); ?>
				</header><!-- #masthead -->
			</div>
				
				<div class="off-canvas-wrapper">
				
				<!-- Load off-canvas container. Feel free to remove if not using. -->			
				<?php get_template_part( 'template-parts/content', 'offcanvas' ); ?>
				
					<div class="off-canvas-content" data-off-canvas-content>
						<div id="page" class="site">
	