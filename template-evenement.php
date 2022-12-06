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
		<code>template-evenement.php</code>

		<?php
		if ( have_posts() ) :
			the_post();
		?>

			<h1><?= the_title(); ?></h1>

			<div class="article__infos">
				<span>Adresse de l'événement : <?= the_field( 'adresse_de_levenement' ); ?></span>
				<span>Date : <?= the_field( 'date_de_levenement' ); ?> <?= the_field( 'heure_de_levenement' ); ?></span>
			</div>

			<?= the_content(); ?>

		<?php
		endif;
	?>

	</main><!-- /.site__main -->

<?php
get_footer();
