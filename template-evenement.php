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
			<?= the_content(); ?>
			<p>Adresse de l'événement : <?= the_field('adresse'); ?></p>
			<p>Date et heure : <?= the_field('date_et_heure'); ?></p>
		<?php
		endif;
		?>

	</main><!-- /.site__main -->

<?php
get_footer();
