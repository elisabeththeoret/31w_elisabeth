<?php
/**
 * The single page template file
 *
 * It is used to display the content for a single page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package igc31w
 */

get_header();
?>

	<h1>Single.php</h1>
	<main class="site__main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
			?>
				<h2><?= the_title(); ?></h2>
			<?php
				the_content();
			endwhile;

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
