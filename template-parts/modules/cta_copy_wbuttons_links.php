<?php
	$fields = get_sub_field('cta:_copy_wbuttons_links');
	$desktop_layout = $fields['desktop_layout'];
	$background_color = $fields['background_color'];
	$copy = $fields['copy'];
	$button_links = $fields['button_links'];
?>
<section class="module cta-copy-wbuttons-links">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell small-12 tablet-10 large-8">
				<div class="inner light bg-<?= $background_color;?>">
					<div class="grid-x grid-padding-x
						<?php if( $desktop_layout == 'row' ) {
							echo ' align-middle';
						} else {
							echo ' flex-dir-column';
						};?>
					">
						<?php if( !empty( $copy ) ):?>
						<div class="cell small-12
							<?php if( $desktop_layout == 'row' ) {
								echo ' medium-6 tablet-auto';
							};?>
						">
							<?= $copy;?>
						</div>
						<?php endif;?>
						<?php if( !empty( $button_links ) ):?>
						<div class="cell small-12
							<?php if( $desktop_layout == 'row' ) {
								echo ' medium-6 tablet-shrink';
							};?>
							grid-x grid-padding-x
						">
							<?php foreach($button_links as $button_link):
								$link = $button_link['link'];
								if( $link ): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
								<div class="cell shrink">
									<a class="button
										<?php if( $desktop_layout == 'row' ) {
											echo ' large';
										};?>
									" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								</div>
								<?php endif;
								
							endforeach;?>
						
						</div>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>