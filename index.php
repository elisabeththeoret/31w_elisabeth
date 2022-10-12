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
	<h1>Index.php</h1>
	<main class="site__main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
			?>

				<h2><?= the_title(); ?></h2>
				<blockquote><?= wp_trim_words(get_the_excerpt(),50,"<a href='".get_the_permalink()."'>Suite</a>"); ?></blockquote>
				<pre><?= the_category() ?></pre>
				<pre><?= the_date() ?></pre>
				<pre><?= the_permalink() ?></pre>

			<?php
			endwhile;

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
