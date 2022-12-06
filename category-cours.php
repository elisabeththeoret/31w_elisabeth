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

				if ( ! in_category( 'principale' ) ) :
				?>

				<article class="liste__article">

					<h2><?= the_field( 'nom_du_cours' ); ?></h2>

					<div class="liste__infos">
						<span>Sigle du cours : <?= the_field( 'sigle_du_cours' ); ?></span>
						<span>Durée du cours : <?= the_field( 'duree_du_cours' ) ?>h</span>
					</div>

					<p><?= wp_trim_words( get_the_excerpt(), 40, " ..." ); ?></p>
					<a href="<?= get_the_permalink() ?>">En savoir plus</a>

				</article>

				<?php
				endif;

			endwhile;

		endif;
		?>

		</section><!-- /.liste -->

	</main><!-- /.site__main -->

<?php
get_footer();
