<?php
	$fields = get_sub_field('gradient_banner');
	$heading = $fields['heading'];
	$image = $fields['image'];
?>
<section class="module gradient-banner">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<?php if( !empty( $heading ) ):?>
			<div class="cell small-12 medium-6">
				<h1 class="light">
					<?= esc_attr( $heading );?>
				</h1>
			</div>
			<?php endif;?>
			<?php if( !empty( $image ) ) {
				$imgID = $image['ID'];
				$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
				$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
				echo '<div class="img-wrap cell small-12 medium-6">';
				echo $img;
				echo '</div>';
			}?>
		</div>
	</div>
</section>