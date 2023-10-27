<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nurturant
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if( get_field('hide_title') != 'true' ):?>
    <header class="entry-header page-banner">
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-center">
                <div class="cell small-12 tablet-10 large-8">   
                    <h1>
                        <?php if( empty( get_field('title_override') ) ) {
                            the_title();
                        } else {
                            echo esc_attr( get_field('title_override') );
                        }
                        ;?>
                    </h1>
                </div>
            </div>
        </div>
    </header><!-- .entry-header -->
    <?php endif?>
		
	<div class="entry-content default-page">
	    <?php get_template_part('template-parts/modules');?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
