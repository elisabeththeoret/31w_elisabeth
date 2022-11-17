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
		<section class="liste">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				// $titre = get_the_title();
				// $titre = substr( $titre, strpos( $titre, " " ), strrpos( $titre, "(" ) - strlen( $titre ) );
			?>

				<article class="liste__article">
					<h2><?= the_field('nom_du_cours'); ?></h2>
					<span>Sigle du cours : <?= the_field('sigle_du_cours'); ?></span>
					<span>Durée du cours : <?= the_field('duree_du_cours') ?>h</span>
					<p><?= wp_trim_words( get_the_excerpt(), 40, " ..." ); ?></p>
					<a href="<?= get_the_permalink() ?>">En savoir plus</a>
				</article>

			<?php
			endwhile;

		endif;
		?>

		</section><!-- /.liste -->
	</main><!-- /.site__main -->

<?php
get_footer();
