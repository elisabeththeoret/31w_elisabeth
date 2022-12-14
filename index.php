<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package igc31w
 */

get_header();
?>

	<main class="site__main">
		<code>Index.php</code>

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
			?>

				<h2><?= get_the_title(); ?></h2>
				<blockquote><?= wp_trim_words( get_the_excerpt(), 50, " <a href='".get_the_permalink()."'>Suite</a>" ); ?></blockquote>
				<pre><?= the_category(); ?></pre>
				<pre><?= the_date(); ?></pre>
				<pre><?= get_the_author(); ?></pre>

			<?php
			endwhile;

		endif;
		?>

	</main><!-- .site__main -->

<?php
get_footer();
