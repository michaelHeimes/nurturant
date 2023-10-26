<?php
/**
 * Template name: Team Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nurturant
 */

get_header();

?>
	<div class="content">
		<div class="inner-content">

			<main id="primary" class="site-main">
				<div class="grid-container">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
						<header class="entry-header home-banner">
							<div class="grid-x grid-padding-x align-center">
								<div class="cell small-12 tablet-10">
									<h1>
										<?php if( empty( get_field('title_override') ) ) {
											the_title();
										} else {
											echo esc_attr( get_field('title_override') );
										}
										;?>	
									</h1>
								</div>
							</div>
						</header><!-- .entry-header -->
					
						<section class="entry-content" itemprop="text">
							<?php			
							$args = array(  
								'post_type' => 'team-member',
								'post_status' => 'publish',
								'posts_per_page' => -1,
							);
							
							$loop = new WP_Query( $args ); 
							
							if ( $loop->have_posts() ) : 
								
								while ( $loop->have_posts() ) : $loop->the_post();
									$fields = get_fields();	
								?>
								
								<div class="team-member">
									<?php if( !empty( $fields['photo'] ) || !empty( $fields['position'] ) ):?>

									<div class="top grid-x grid-padding-x align-middle align-center">
										
										<?php if( !empty( $fields['photo'] ) ) {
											$imgID = $fields['photo']['ID'];
											$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
											$img = wp_get_attachment_image( $imgID, 'team-photo', false, [ "class" => "", "alt"=>$img_alt] );
											echo '<div class="cell small-12 tablet-2 photo-wrap">';
											echo '<div class="inner">';
											echo $img;
											echo '</div>';
											echo '</div>';
										}?>
										
										<div class="cell small-12 tablet-8">
											<h2 class="h3">
												<?php the_title();?>
											</h2>
											<?php if( !empty( $fields['position'] ) || !empty( $fields['organization'] ) ):?>
												<div class="cell small-12 tablet-10">
													<p class="small"><b><?= esc_attr( $fields['position'] );?></b></p>
													<?php endif;?>
													<?php if( !empty( $fields['organization'] ) ):?>
													<p class="small"><i><?= esc_attr( $fields['organization'] );?></i></p>
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
									
								<?php
								endwhile;
							
							endif;
							wp_reset_postdata(); 
							?>
	
						</section> <!-- end article section -->
								
						<footer class="article-footer">
						</footer> <!-- end article footer -->
							
					</article><!-- #post-<?php the_ID(); ?> -->
				</div>
			</main><!-- #main -->
				
		</div>
	</div>

<?php
get_footer();