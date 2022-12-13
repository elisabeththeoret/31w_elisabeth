<?php
/**
 * Template Name: evenement
 * 
 * @package WordPress
 * @subpackage igc31w
 */

get_header();
?>

	<main class="site__main">
		<?php
		if ( have_posts() ) :
			the_post();
		?>
			<article class="article__post">
				<h2><?= the_title(); ?></h2>

				<div class="article__infos">
					<span>Adresse de l'événement : <?= the_field( 'adresse_de_levenement' ); ?></span>
					<span>Date : <?= the_field( 'date_de_levenement' ); ?> <?= the_field( 'heure_de_levenement' ); ?></span>
				</div>

				<div class="texte">
					<?= the_content(); ?>
				</div>
			</article>

		<?php
		endif;
	?>

	</main><!-- /.site__main -->

<?php
get_footer();
