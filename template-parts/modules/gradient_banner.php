<?php
	$fields = get_sub_field('gradient_banner');
	$heading = $fields['heading'];
	$image = $fields['image'];
?>
<section class="module gradient-banner">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<?php if( !empty( $heading ) ):?>
			<div class="cell small-12 medium-6">
				<h1 class="light">
					<?= esc_attr( $heading );?>
				</h1>
			</div>
			<?php endif;?>
		</div>
	</div>
</section>