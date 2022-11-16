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
		<h4>igc31w</h4>
		<?= get_sidebar( 'footer-1' ); ?>
		<?= get_sidebar( 'footer-2' ); ?>
		<?= get_sidebar( 'footer-3' ); ?>
		<?= get_sidebar( 'footer-4' ); ?>
	</footer><!-- .site__footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
