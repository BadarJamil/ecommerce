<?php

get_header(); ?>

	<div class="store-container">

		<div id="primary" class="content-area">

			<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :			

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_pagination();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<?php get_sidebar('right'); ?>

	</div>

<?php get_footer();
