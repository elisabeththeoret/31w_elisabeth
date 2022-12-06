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
		<code>front-page.php</code>

		<?php
		wp_nav_menu(
			array(
				"menu" => "evenement",
				"container" => "nav",
				"container_class" => "menu__evenement",
			)
		);
		?>

		<section class="grille">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					if ( in_category( 'galerie' ) ) :
					?>

						<article class="grille__galerie">

							<?= the_title(); ?>
							<?= the_content(); ?>

						</article>

					<?php
					endif;

					if ( in_category( 'cours' ) ) :
					?>

						<article class="grille__article">

							<h2><?= the_field("nom_du_cours"); ?></h2>
							<div class="grille__infos">
								<small><?= the_field("sigle_du_cours"); ?></small>
								<small><?= the_field("duree_du_cours"); ?> h</small>
							</div>
							<p><?= wp_trim_words( get_the_excerpt(), 20, " ..." ); ?></p>
							<a href="<?= get_the_permalink(); ?>">En savoir plus</a>

						</article>

						<?php
					endif;

				endwhile;

			endif;
			?>

		</section><!-- /.grille -->
	</main><!-- .site__main -->

<?php
get_footer();
