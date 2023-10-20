<?php
	$fields = get_sub_field('logo_slider');
	$copy = $fields['copy'];
	$logos = $fields['logos'];
?>
<section class="module logo-slider">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<?php if( !empty( $copy ) ):?>
			<div class="cell small-12">
				<?= $copy;?>
			</div>
			<?php endif;?>
			<?php if( !empty( $logos ) ):?>
			<div class="cell small-12">
				<div class="logo-slider-swiper">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php foreach($logos as $logo):?>
								<?php if( !empty( $logo ) ) {
									$imgID = $logo['ID'];
									$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
									$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
									echo '<div class="swiper-slide">';
									echo $img;
									echo '</div>';
								}?>
							<?php endforeach;?>
						</div>
					</div>
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</section>