<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nurturant
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="article-header text-center">	
		<p class="byline">
			<?php echo get_the_time( __('F j, Y') );?>
			<?php
			if( is_singular('news') ) {
				
				$terms = get_the_terms(get_the_ID(), 'news-category');						

				// Check if terms exist
				if ($terms && !is_wp_error($terms)) {
					echo '<span>|</span>&nbsp;';
					$term_links = array();
				
					// Loop through each term
					foreach ($terms as $term) {
						// Generate a link to the term archive page
						$term_links[] = '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a>';
					}
				
					// Output the term links separated by commas
					echo implode(', ', $term_links);
				}
			} else {
				echo '<span>|</span>&nbsp;';
				echo get_the_category_list(', ');
			}
			?>
		</p>	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
	</header> <!-- end article header -->


	<section class="entry-content" itemprop="text">
		<div class="thumbnail text-center">
			<?php the_post_thumbnail('blog-post-featured'); ?>
		</div>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nurturant' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nurturant' ),
				'after'  => '</div>',
			)
		);
		?>
	</section><!-- .entry-content -->

	<footer class="article-footer">
		
		<h5 class="footer-header text-center color-purple">Share This Post</h5>
		
		<div class="a2a_kit a2a_default_style">
			<a class="a2a_button_facebook" href="#">
				<svg width="6.36px" height="11.54px" viewBox="0 0 10 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<title>facebook icon</title>
					<g id="faceboo-icon-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g id="faceboo-icon" transform="translate(0.000000, -0.000134)" fill="#771c7d" fill-rule="nonzero">
							<path d="M7.418,3.01313384 L9.075,3.01313384 L9.075,0.128133843 C8.27338789,0.0400164939 7.46743568,-0.00271833731 6.661,-5.55111512e-17 C4.272,-5.55111512e-17 2.636,1.50013384 2.636,4.26413384 L2.636,6.80513384 L0,6.80513384 L0,10.0311338 L2.636,10.0311338 L2.636,18.1471338 L5.868,18.1471338 L5.868,10.0311338 L8.397,10.0311338 L8.797,6.80513384 L5.866,6.80513384 L5.866,4.58413384 C5.866,3.65213384 6.118,3.01413384 7.417,3.01413384 L7.418,3.01313384 Z" id="Path_8"></path>
						</g>
					</g>
				</svg>
			</a>
			<a class="a2a_button_twitter" href="#">
				<svg width="13.54px" height="10.62" viewBox="0 0 20 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<title>twitter icon</title>
					<g id="twitter-icon-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g id="twitter-icon" transform="translate(0.000000, 0.000554)" fill="#771c7d" fill-rule="nonzero">
							<path d="M19.321,1.85744589 C18.5943289,2.17457906 17.8257739,2.38540967 17.039,2.48344589 C17.8683229,1.99168907 18.4884838,1.21284091 18.782,0.294445889 C18.0054813,0.755022917 17.1558946,1.07936754 16.27,1.25344589 C15.1585266,0.0667302319 13.4347216,-0.320218858 11.9226705,0.277584204 C10.4106193,0.875387265 9.41746633,2.33651019 9.418,3.96244589 C9.41520006,4.26492916 9.44605647,4.56678528 9.51,4.86244589 C6.32312841,4.70601132 3.35385747,3.19918997 1.346,0.719445889 C0.287728974,2.52825964 0.821077734,4.84834866 2.563,6.01344589 C1.93583404,5.99666902 1.32190255,5.82929552 0.773,5.52544589 L0.773,5.56844589 C0.775236241,7.45393488 2.10049929,9.07898964 3.947,9.46044589 C3.6079613,9.54964851 3.25856501,9.59336508 2.908,9.59044589 C2.65628196,9.59481905 2.40482678,9.57202045 2.158,9.52244589 C2.68288069,11.1326691 4.16495103,12.2378129 5.858,12.2814459 C4.45668656,13.3789334 2.72793199,13.9750192 0.948,13.9744459 C0.631171049,13.9767098 0.314522507,13.9586729 0,13.9204459 C1.81120677,15.0882032 3.92198665,15.7061195 6.077,15.6994459 C9.07292094,15.7193049 11.9519077,14.5380277 14.0704842,12.4196391 C16.1890607,10.3012505 17.3705932,7.42236858 17.351,4.42644589 C17.351,4.25144589 17.345,4.08244589 17.337,3.91444589 C18.1178877,3.35509707 18.7902201,2.65802655 19.321,1.85744589 L19.321,1.85744589 Z" id="Path_131"></path>
						</g>
					</g>
				</svg>	
			</a>	    
			<a class="a2a_button_linkedin" data-url="<?php echo get_permalink();?>" href="#">
				<svg width="12.73px" height="11.58px" viewBox="0 0 13 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<title>linkedin icon</title>
					<g id="linkedin-icon-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g id="linkedin-icon" transform="translate(-0.000047, -0.000554)" fill="#771c7d" fill-rule="nonzero">
							<path d="M12.3810465,7.26055438 L12.3810465,11.8345544 L9.73304654,11.8345544 L9.73304654,7.57055438 C9.73304654,6.50455438 9.35404654,5.76455438 8.39104654,5.76455438 C7.78103115,5.76841582 7.2384775,6.15315747 7.03304654,6.72755438 C6.96603333,6.93843241 6.93691657,7.15951661 6.94704654,7.38055438 L6.94704654,11.8345544 L4.28204654,11.8345544 C4.28204654,11.8345544 4.31604654,4.59555438 4.28204654,3.85555438 L6.93004654,3.85555438 L6.93004654,4.99155438 C6.93004654,5.00855438 6.91304654,5.00855438 6.91304654,5.02555438 L6.93004654,5.02555438 L6.93004654,4.99155438 C7.41714985,4.13873077 8.33870566,3.62821198 9.32004654,3.66755438 C11.0740465,3.66755438 12.3810465,4.80255438 12.3810465,7.26155438 L12.3810465,7.26055438 Z M1.50004654,0.00455438027 C1.13189551,-0.0252884939 0.766977213,0.0924093762 0.485640947,0.33173276 C0.204304681,0.571056143 0.0296188487,0.91238152 2.30125515e-05,1.28055438 C2.30125515e-05,1.31355438 2.30125515e-05,1.34755438 2.30125515e-05,1.38055438 C-0.00208139905,1.74390283 0.140220631,2.09321414 0.395646513,2.35164062 C0.651072396,2.6100671 0.998698012,2.75643883 1.36204654,2.75855438 C1.39535126,2.76050766 1.42874182,2.76050766 1.46204654,2.75855438 L1.47904654,2.75855438 C1.84481168,2.79155271 2.20865643,2.67750314 2.49013909,2.44162067 C2.77162175,2.2057382 2.94755659,1.86745247 2.97904654,1.50155438 C2.97904654,1.46255438 2.97904654,1.42255438 2.97904654,1.38255438 C2.98277783,1.02035666 2.84239601,0.671527154 2.58881453,0.412881553 C2.33523306,0.154235952 1.98924723,0.0069848464 1.62704654,0.00355438027 C1.58404654,-0.000445619728 1.54204654,0.00155438027 1.50004654,0.00455438027 L1.50004654,0.00455438027 Z M0.155046539,11.8345544 L2.80004654,11.8345544 L2.80004654,3.85655438 L0.158046539,3.85655438 L0.155046539,11.8345544 Z" id="Path_5"></path>
						</g>
					</g>
				</svg>	
			</a>
	
		</div>
		
		<script async src="https://static.addtoany.com/menu/page.js"></script>
						
	</footer> <!-- end article footer -->

</article><!-- #post-<?php the_ID(); ?> -->


