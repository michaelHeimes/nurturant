<?php
	$fields = get_sub_field('logo_slider');
	$copy = $fields['copy'];
	$logos = $fields['logos'];
?>
<section class="module logo-slider">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<?php if( !empty( $copy ) ):?>
			<div class="header cell small-12">
				<?= $copy;?>
			</div>
			<?php endif;?>
			<?php if( !empty( $logos ) ):?>
			<div class="cell small-12">
				<div class="logo-slider-swiper overflow-hidden">
					<div class="swiper-container relative">
						<div class="swiper-nav swiper-button-prev">
							<svg width="28px" height="48px" viewBox="0 0 28 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g class="slider-nav-icon" transform="translate(-0.000000, 0.000000)" fill="#000000" fill-rule="nonzero"><g id="Group" transform="translate(14.000000, 24.000000) rotate(90.000000) translate(-14.000000, -24.000000) translate(-10.000000, 10.000000)"><path d="M24,28 C23.5,28 23,27.9 22.5,27.7 C22,27.5 21.6,27.2 21.2,26.8 L1,5.9 C0.3,5.3 0,4.5 0,3.5 C0,2.5 0.3,1.7 1,1 C1.7,0.3 2.4,0 3.4,0 C4.4,0 5,0.3 5.7,1 L24,20 L42.3,1 C42.9,0.4 43.7,0 44.6,0 C45.5,0 46.3,0.3 47,1 C47.7,1.7 48,2.5 48,3.5 C48,4.5 47.7,5.3 47,6 L26.8,26.8 C26.4,27.2 25.9,27.5 25.5,27.7 C25,27.9 24.5,28 24,28 Z" id="Path" fill="#000000"></path></g></g></g></svg>
						</div>
						<div class="swiper-wrapper align-middle small-up-1 medium-up-2 tablet-up-4">
							<?php foreach($logos as $logo):?>
								<?php if( !empty( $logo ) ) {
									$imgID = $logo['ID'];
									$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
									$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
									echo '<div class="swiper-slide logo-slide cell text-center">';
									echo $img;
									echo '</div>';
								}?>
							<?php endforeach;?>
						</div>
						<div class="swiper-nav swiper-button-next">
							<svg width="28px" height="48px" viewBox="0 0 28 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g class="slider-nav-icon" transform="translate(-0.000000, 0.000000)" fill="#000000" fill-rule="nonzero"><g id="Group" transform="translate(14.000000, 24.000000) rotate(90.000000) translate(-14.000000, -24.000000) translate(-10.000000, 10.000000)"><path d="M24,28 C23.5,28 23,27.9 22.5,27.7 C22,27.5 21.6,27.2 21.2,26.8 L1,5.9 C0.3,5.3 0,4.5 0,3.5 C0,2.5 0.3,1.7 1,1 C1.7,0.3 2.4,0 3.4,0 C4.4,0 5,0.3 5.7,1 L24,20 L42.3,1 C42.9,0.4 43.7,0 44.6,0 C45.5,0 46.3,0.3 47,1 C47.7,1.7 48,2.5 48,3.5 C48,4.5 47.7,5.3 47,6 L26.8,26.8 C26.4,27.2 25.9,27.5 25.5,27.7 C25,27.9 24.5,28 24,28 Z" id="Path" fill="#000000"></path></g></g></g></svg>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</section>