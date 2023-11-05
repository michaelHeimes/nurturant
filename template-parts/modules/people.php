<?php
	$fields = get_sub_field('people');
	$heading = $fields['heading'];
	$people = $fields['people'];
?>
<section class="module people">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<?php if( !empty( $heading ) ):?>
			<div class="cell small-12 tablet-8">
				<h2><?= $heading;?></h2>
			</div>
			<?php endif;?>
			
			<?php if( !empty($people) ) :?>
			<div class="cell small-12 tablet-10">
				<?php foreach( $people as $post ):
					setup_postdata($post); ?>
				
						<div class="team-member">
							<?php if( !empty( get_field('photo') ) || !empty( get_field('position') ) ):?>
						
							<div class="top grid-x grid-padding-x align-middle align-center">
								
								<?php if( !empty( get_field('photo') ) ) {
									$imgID = get_field('photo')['ID'];
									$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
									$img = wp_get_attachment_image( $imgID, 'team-photo', false, [ "class" => "", "alt"=>$img_alt] );
									echo '<div class="cell small-12 tablet-2 photo-wrap">';
									echo '<div class="inner">';
									echo $img;
									echo '</div>';
									echo '</div>';
								}?>
								
								<div class="cell small-12 tablet-8">
									<h3>
										<?php the_title();?>
									</h3>
									<?php if( !empty( get_field('position') ) || !empty( get_field('organization') ) ):?>
										<div class="cell small-12 tablet-10">
											<p class="small"><b><?= esc_attr( get_field('position') );?></b></p>
											<?php endif;?>
											<?php if( !empty( get_field('organization') ) ):?>
											<p class="small"><i><?= esc_attr( get_field('organization') );?></i></p>
										</div>
									<?php endif;?>
								</div>
									
							</div>
							<?php endif;?>
							
							<div class="grid-x grid-padding-x align-center">
								<div class="cell small-12 tablet-10">
									<div class="bio large">
										<?php the_content();?>
									</div>
								</div>
							</div>
							
						</div>
						
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
			<?php endif;?>
			
		</div>
	</div>
</section>
