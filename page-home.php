<?php
/** Template Name: homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package iedev
 */

get_header(); ?>

	
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	

<?php
//get_sidebar();
get_footer();
