<?php
/**
 * Template part for displaying page content in page.php
 */
?>
	
	<?php 
		if( have_rows('page_modules') ):
			while ( have_rows('page_modules') ) : the_row();

				if( get_row_layout() == 'gradient_banner' ):
					get_template_part('template-parts/modules/gradient_banner');
				elseif( get_row_layout() == 'wysiwyg_editor' ):
					get_template_part('template-parts/modules/wysiwyg_editor');
				elseif( get_row_layout() == 'cta:_yellow_background_wicon_links' ):
					get_template_part('template-parts/modules/cta_yellow_background_wicon_links');
					elseif( get_row_layout() == 'cta:_copy_wbuttons_links' ):
					get_template_part('template-parts/modules/cta_copy_wbuttons_links');
					elseif( get_row_layout() == 'copy_left_image_right' ):
					get_template_part('template-parts/modules/copy_left_image_right');
					elseif( get_row_layout() == 'logo_slider' ):
					get_template_part('template-parts/modules/logo_slider');
					elseif( get_row_layout() == 'image_slider' ):
					get_template_part('template-parts/modules/image_slider');
					elseif( get_row_layout() == 'video_embed_wcaption' ):
					get_template_part('template-parts/modules/video');
				endif;
	
			endwhile;
		endif;
	?>
