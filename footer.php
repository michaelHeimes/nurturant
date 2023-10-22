<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nurturant
 */

?>

				<footer id="colophon" class="site-footer bg-purple light">
					<div class="site-info">
						<div class="grid-container">
							<div class="top grid-x grid-padding-x">				
								<?php if( !empty( get_field('footer_logo', 'option') ) ) {
									$imgID = get_field('footer_logo', 'option')['ID'];
									$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
									$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
									echo '<div class="cell small-12 medium-6 tablet-2">';
									echo $img;
									echo '</div>';
								}?>
								<?php if(wp_get_nav_menu_items(get_nav_menu_locations()['footer-links'])): ?>
								<div class="cell small-12 medium-6 tablet-3 tablet-offset-1">
									<?php nurturant_footer_links();?>
								</div>
								<?php endif;?>
								<?php 
								if( !empty( get_field('sponsor_logo', 'option') ) || !empty( get_field('sponsor_copy', 'option') ) ){ if( !empty( get_field('sponsor_logo', 'option' ) ) ) {
										$imgID = get_field('sponsor_logo', 'option')['ID'];
										$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
										$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
										echo '<div class="cell small-12 medium-6 tablet-2">';
										echo $img;
										echo '</div>';
									}
									if(!empty( get_field('sponsor_copy', 'option') ) ) {
										echo '<div class="cell small-12 medium-6 tablet-6">';
										the_field('sponsor_copy', 'option');
										echo '</div>';
									}
								};?>
							</div>
							<div class="bottom grid-x grid-padding-x light">
								<div class="cell small-12">
									<p>
										<?php if( get_field('contact_info','option') ):?>
										<div class="p">
											<?php the_field('contact_info','option');?>
										</div>
										<?php endif;?>
										<?php if( get_field('email_address','option') ):?>
										<div>
											<a class="color-white" href="mailto:<?php the_field('email_address','option');?>">
												<u class="color-white"><?php the_field('email_address','option');?></u>
											</a>
										</div>
										<?php endif;?>
									</p>
									<p><?= '&copy; Copyright ' . date('Y') . '&nbsp;' . get_field('copyright_text', 'option');?> | <a class="color-white" href="https://propragency.com/" target="_blank"><u>Made by Propr</u></a></p>
								</div>
							</div>
						</div>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
					
			</div><!-- #page -->
			
		</div>  <!-- end .off-canvas-content -->
							
	</div> <!-- end .off-canvas-wrapper -->
					
<?php wp_footer(); ?>

</body>
</html>
