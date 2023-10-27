<?php
	$fields = get_sub_field('video_wcaption');
	$video = $fields['video'];
	$video_caption = $fields['video_caption'];
	$rtm = $fields['remove_top_margin'];
	$rbm = $fields['remove_bottom_margin'];
?>
<section class="module video-embed<?php if( $rtm ){ echo ' ntm'; }; if( $rbm ){ echo ' nbm'; }; ?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<?php if( !empty( $video ) ):?>
			<div class="cell small-12 tablet-10 large-8">
				<div class="responsive-embed widescreen">
					<?php
					// Load value.
					$iframe = $video;
										
					// Use preg_match to find iframe src.
					preg_match('/src="(.+?)"/', $iframe, $matches);
					$src = $matches[1];
					
					// Add extra parameters to src and replace HTML.
					$params = array(
						'controls'  => 1,
						'hd'        => 1,
						'autohide'  => 1
					);
					$new_src = add_query_arg($params, $src);
					$iframe = str_replace($src, $new_src, $iframe);
					
					// Add extra attributes to iframe HTML.
					$attributes = 'frameborder="0"';
					$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
					
					// Display customized HTML.
					echo $iframe;
					?>
				</div>
				<?php if( !empty( $video_caption ) ):?>
					<p class="wp-caption-text"><?= $video_caption;?></p>
				<?php endif;?>
			</div>
			<?php endif;?>
		</div>
	</div>
</section>
