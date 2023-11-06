<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nurturant
 */
 
 $category = get_queried_object();
 $category_name = $category->name;
 
 $exclude_category_ids = array(
	$category->term_id,
	get_cat_ID('Uncategorized') // Get the ID of the "Uncategorized" category
 );

get_header(); ?>
			 
	 <div class="content">
		 <div class="grid-container">
			 
			 <div class="inner-content grid-x grid-padding-x">
				 
				 <header class="banner cell small-12">
					 <div class="top grid-x grid-padding-x align-middle">
						 <div class="cell small-12 medium-auto">
							 <h1><?= $category_name;?></h1>
						 </div>
						 <div class="cell small-12 medium-shrink grid-x align-middle">
							 <form method="get" action="/" _lpchecked="1">
								 <input type="text" name="s" placeholder="Search" class="">
								 <input type="hidden" name="" value="">
								 <button type="submit">
									 <svg xmlns="http://www.w3.org/2000/svg" width="33.784" height="33.785" viewBox="0 0 33.784 33.785">
									   <g id="Group_676" data-name="Group 676" transform="translate(-0.704 -0.704)">
										 <path id="Path_307" data-name="Path 307" d="M32.486,30.824l-6.018-6.018a13.743,13.743,0,1,0-1.661,1.661l6.018,6.018a1.175,1.175,0,0,0,1.661-1.661ZM4.623,15.984A11.361,11.361,0,1,1,15.984,27.346,11.362,11.362,0,0,1,4.623,15.984Z" transform="translate(0 0)" fill="#fff" stroke="#fff" stroke-width="3"/>
									   </g>
									 </svg>
								 </button>
							 </form>
						 </div>				
					 </div>
					 
					 <div class="grid-x grid-padding-x align-middle">
						 <nav class="cell small-12">
							<?php 
							$categories = get_categories(array('exclude' => $exclude_category_ids));
							 
							if ($categories) {
								echo '<div class="categories grid-x grid-padding-x align-center">';
								
									echo '<div class="cell shrink">';
								 		echo '<a class="button" href="' . esc_url( get_permalink( get_option( 'page_for_posts' ) ) ) . '">All Posts</a>';
								  	echo '</div>';
								  	
									foreach ($categories as $category) {
										echo '<div class="cell shrink">';
											echo '<a class="button" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
										echo '</div>';
								 	}
									
								echo '</div>';
							}
							?>
						 </nav>
					 </div>
					 
				 </header>
		 
				 <main class="main cell small-12" role="main">
				 
					 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				  
						 <!-- To see additional archive styles, visit the /parts directory -->
						 <?php get_template_part( 'template-parts/loop', 'archive' ); ?>
						 
					 <?php endwhile;?>	
					 
					 <?php nurturant_page_navi();?>
							 
					 <?php else : ?>
 
						 <?php get_template_part( 'template-parts/content', 'missing' ); ?>
							 
					 <?php endif; ?>
 
				 </main> <!-- end #main -->
				 
			 </div> <!-- end #inner-content -->
 
		 </div>
	 </div> <!-- end #content -->
 
 <?php get_footer(); ?>
