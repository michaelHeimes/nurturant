<?php
/**
 * The template part for displaying an author byline
 */
?>

<p class="byline">
	<?php
	if( is_singular('news') ) {
		// Get the terms (categories) assigned to the current post in the 'news-category' taxonomy
		$terms = get_the_terms(get_the_ID(), 'news-category');
		
		// Check if terms exist
		if ($terms && !is_wp_error($terms)) {
			$term_links = array();
		
			// Loop through each term
			foreach ($terms as $term) {
				// Generate a link to the term archive page
				$term_links[] = '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a>';
			}
		
			// Output the term links separated by commas
			$list =  implode(', ', $term_links);
		}
		

		printf( __( 'Posted on %1$s by %2$s - %3$s', 'nurturant' ),
			get_the_time( __('F j, Y', 'nurturant') ),
			get_the_author_posts_link(),
			$list
		);
	} else {
		printf( __( 'Posted on %1$s by %2$s - %3$s', 'nurturant' ),
			get_the_time( __('F j, Y', 'nurturant') ),
			get_the_author_posts_link(),
			get_the_category_list(', ')
		);
	}
	?>
</p>	
