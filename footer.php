<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package igc31w
 */
?>

	<footer class="site__footer">

		<div class="footer__brand">
			<h4>igc31w</h4>
			<?= get_sidebar( 'icones-reseaux' ); ?>
		</div>

		<?= get_sidebar( 'adresse' ); ?>

		<?= get_sidebar( 'recherche' ); ?>

	</footer><!-- .site__footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
