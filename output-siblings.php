								
								<?php
								global $post;
								$direct_parent = $post->post_parent;
								$args = array(
								'post_type'      => 'page',
								'posts_per_page' => -1,
								'post_parent'    => $direct_parent,
								'order'          => 'ASC',
								'orderby'        => 'menu_order',
								'post__not_in' => array( $post->ID ),
								);
								
								$parent_query = new WP_Query( $args );
								?>

							<?php while ( $parent_query ->have_posts() ) : $parent_query ->the_post(); ?>

								<div <?php post_class(); ?>>
		
				<!-------------------- HTML GOES HERE ----------------------------->				
									
									<?php endwhile; ?>

									<?php wp_reset_postdata(); ?>												
