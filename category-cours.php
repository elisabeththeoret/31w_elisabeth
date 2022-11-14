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
			// $titre = get_the_title();
			// $titre = substr( $titre, strpos( $titre, " " ), strrpos( $titre, "(" ) - strlen( $titre ) );
		?>

			<h2><?= the_field('nom_du_cours'); ?></h2>
			<pre><?= the_field('sigle_du_cours'); ?> - <?= the_field('duree_du_cours') ?>h</pre>
			<p><?= wp_trim_words( get_the_excerpt(), 40, " <a href='" . get_the_permalink() . "'>Suite</a>" ); ?></p>
			<pre></pre>

		<?php
		endwhile;

	endif;
	?>

	</main><!-- /.site__main -->

<?php
get_footer();
