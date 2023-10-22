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
					<div class="grid-x grid-padding-x align-center">
						<div class="cell small-12 tablet-10 large-8">
		
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
								<header class="entry-header home-banner">
									<h1><?php the_title();?></h1>
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
											<h2 class="h3">
												<?php the_title();?>
											</h2>
											<?php if( !empty( $fields['photo'] ) || !empty( $fields['position'] ) ):?>
												<div class="top grid-x grid-padding-x">
													<?php if( !empty( $fields['photo'] ) ) {
														$imgID = $fields['photo']['ID'];
														$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
														$img = wp_get_attachment_image( $imgID, 'team-photo', false, [ "class" => "", "alt"=>$img_alt] );
														echo '<div class="cell small-12 tablet-2 photo-wrap">';
														echo $img;
														echo '</div>';
													}?>
													<?php if( !empty( $fields['position'] ) || !empty( $fields['organization'] ) ):?>
														<div class="cell small-12 tablet-10 large">
															<p><b><?= esc_attr( $fields['position'] );?></b></p>
															<?php endif;?>
															<?php if( !empty( $fields['organization'] ) ):?>
															<p><i><?= esc_attr( $fields['organization'] );?></i></p>
														</div>
													<?php endif;?>
												</div>
											<?php endif;?>
											<div class="bio large">
												<?php the_content();?>
											</div>
										</div>
											
										<?php
										endwhile;
									
									endif;
									wp_reset_postdata(); 
									?>
			
								</section> <!-- end article section -->
										
								<footer class="article-footer">
									<?php get_template_part( 'template-parts/content', 'page' );?>
								</footer> <!-- end article footer -->
									
							</article><!-- #post-<?php the_ID(); ?> -->
							
						</div>
					</div>
				</div>
			</main><!-- #main -->
				
		</div>
	</div>

<?php
get_footer();