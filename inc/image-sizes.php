<?php
function add_custom_sizes() {
	add_image_size( 'team-photo', 320, 320, true );
	add_image_size( 'blog-post-featured', 1700, false );
}
add_action('after_setup_theme','add_custom_sizes');