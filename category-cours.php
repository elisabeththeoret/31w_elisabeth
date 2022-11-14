<?php
/**
 * The category cours template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package igc31w
 */

get_header();
?>

	<main class="site__main">
		<code>category-cours.php</code>

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				$titre = get_the_title();
				$codeCours = substr( $titre, 0, 7 );
				$heuresCours = substr( $titre, strrpos( $titre, "(" ) );
				$titre = substr( $titre, strpos( $titre, " " ), strrpos( $titre, "(" ) - strlen( $titre ) );
			?>
				<h2><?= $titre ?></h2>
				<blockquote><?= wp_trim_words( get_the_excerpt(), 50, "<a href='" . get_the_permalink() . "'>Suite</a>" ); ?></blockquote>
				<pre><?= the_category(); ?></pre>
				<pre><?= the_date(); ?></pre>
				<pre><?= get_the_author(); ?></pre>
			<?php
			endwhile;

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
