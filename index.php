<?php 
	get_header();
	// Main loop
	if (have_posts()) {
		while (have_posts()) {
			the_post(); ?>

			<!-- post element -->
			<article class="post">
				<h2>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<?php the_content(); ?>
			</article>

		<?php
		}
	// In case no content is found	
	} else {
		echo '<p>No content found</p>'; 
	}
	get_footer();
?>