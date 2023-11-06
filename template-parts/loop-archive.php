<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cell small-12'); ?> role="article">	
	<div class="grid-x grid-padding-x align-middle">
		<div class="left cell small-12 tablet-6">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
		</div>				

		<div class="right cell small-12 tablet-6">
			
			<header class="article-header">
				<?php get_template_part( 'parts/content', 'byline' ); ?>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			</header> <!-- end article header -->
			
			<section class="entry-content" itemprop="text">
				<?php
				$custom_excerpt = get_post_field('post_excerpt', get_the_ID());
				
				if (!empty($custom_excerpt)) {
					echo $custom_excerpt;
				} else {
					$content = get_the_content();
					$content = strip_tags($content); // Remove HTML tags from the content.
					$words = explode(' ', $content);
					$excerpt = implode(' ', array_slice($words, 0, 30));
				
					// Append an ellipsis to the excerpt if the content has more than 10 words.
					if (count($words) > 30) {
						$excerpt .= '...';
					}
				
					echo $excerpt;
				}
				?>
			</section> <!-- end article section -->
								
			<footer class="article-footer btn-wrap">
				<a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Read More</a>
			</footer> <!-- end article footer -->	
			
		</div>	
	</div>
</article> <!-- end article -->