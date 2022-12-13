<?php
/**
 * Template Name: Search Page
 * 
 * Page de résultats de recherche.
 * 
 * @package igc31w
 */

get_header();
?>

	<main class="site__main">

		<aside class="site__search">
			<?= get_search_form(); ?>
		</aside><!-- .site__search -->

		<section class="liste">
		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				if ( in_category( 'cours' ) && ! in_category( 'principale' ) ) :
				?>
					<?= get_template_part( 'template-parts/search-cours', "" ); ?>
				<?php
				endif;

			endwhile;

		endif;
		?>
		</section><!-- /.liste -->

	</main><!-- .site__main -->

<?php
get_footer();
