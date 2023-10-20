<?php
	$fields = get_sub_field('cta:_yellow_background_wicon_links');
	$heading = $fields['heading'];
	$ctas = $fields['ctas'];
?>
<section class="module cta-yellow-background-wicon-links text-center">
	<div class="grid-container">
		<?php if( !empty( $heading ) ):?>
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<h2><?= $heading;?></h2>
			</div>
		</div>
		<?php endif;?>
		<?php if( !empty( $ctas ) ):?>
		<div class="grid-x grid-padding-x">
			<?php foreach($ctas as $cta):
				$icon = $cta['icon'];
				$link = $cta['link'];	
			?>
			<div class="cell small-12 medium-6 tablet-3 text-center">
				<?php 
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
				<?php endif; ?>

					<?php if( !empty( $icon ) ) {
						$imgID = $icon['ID'];
						$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
						$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
						echo '<div class="icon-wrap grid-x align-middle align-center make-square">';
						echo '<div class="inner">';
						echo $img;
						echo '</div>';
						echo '</div>';
					}?>

				<?php if( $link ): ?>
					<div class="grid-x align-center">
						<span class="arrow-link align-middle">
							<span><?php echo esc_html( $link_title ); ?></span>
							<?php get_template_part('template-parts/svg', 'right-arrow');?>
						</span>
					</div>
					</a>
				<?php endif; ?>
			</div>
			<?php endforeach;?>
		</div>
		<?php endif;?>
	</div>
</section>