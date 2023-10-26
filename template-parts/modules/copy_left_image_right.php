<?php
	$fields = get_sub_field('copy_left_image_right');
	$copy = $fields['copy'];
	$arrow_links = $fields['arrow_links'];
	$image = $fields['image'];
?>
<section class="module copy-left-image-right">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<?php if( !empty( $copy ) ):?>
			<div class="cell small-12 medium-6">
				<div class="copy-wrap light">
					<?= $copy;?>
					<?php if( !empty( $arrow_links ) ):?>
						<div class="arrow-links">
							<?php foreach($arrow_links as $arrow_link):
								$link = $arrow_link['link'];
								if( $link ): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
								<div>
									<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
										<span class="arrow-link align-middle font-sans">
											<span><b><?php echo esc_html( $link_title ); ?></b></span>
											<?php get_template_part('template-parts/svg', 'right-arrow-light');?>
										</span>
									</a>
								</div>
								<?php endif;
								
							endforeach;?>
						</div>
					<?php endif;?>
				</div>
			</div>
			<?php endif;?>
			<?php if( !empty( $image ) ) {
				$imgID = $image['ID'];
				$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
				$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
				echo '<div class="cell small-12 medium-6">';
				echo '<div class="img-wrap">';
				echo '<div class="inner">';
				echo $img;
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}?>
		</div>
	</div>
</section>