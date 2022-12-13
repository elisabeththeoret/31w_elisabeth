<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package igc31w
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'igc31w' ); ?></a>

	<header id="masthead" class="site__header">
		<?php
			the_custom_logo();

			wp_nav_menu(
				array(
					"menu" => "principal",
					"container" => "nav",
					"container_class" => "menu__principal",
				)
			);
		?>

		<div class="site__utilitaires">
			<div class="site__branding">
				<span class="site__title"><a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home"><?= bloginfo( 'name' ); ?></a></span>
				<?php
				$igc31w_description = get_bloginfo( 'description', 'display' );

				if ( $igc31w_description || is_customize_preview() ) :
				?>
					<p class="site__description"><?= $igc31w_description; ?></p>
				<?php
				endif;
				?>
			</div>

			<div class="site__utile">
				<?= get_sidebar( 'header-recherche' ); ?>
				<?= get_sidebar( 'header-icones-reseaux' ); ?>
			</div>
		</div><!-- .site__utilitaires -->

		<section class="site__section">
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					if ( in_category( 'principale' ) ) :
						get_template_part( 'template-parts/section-principale', "" );
					endif;

				endwhile;

			endif;
			?>
		</section><!-- .site__section -->
	</header><!-- #masthead -->

	<aside class="site__menu">
		<div class="site__menu__header">
			<input type="checkbox" id="chkBurger" class="chkBurger">
			<label for="chkBurger" class="burger">
				<code>&#10148;</code>
			</label>
			<h2>Cours</h2>
		</div>

		<?php
			wp_nav_menu(
				array(
					"menu" => "aside",
					"container" => "nav",
					"container_class" => "menu__aside",
				)
			);
		?>
	</aside><!-- .site__menu -->

	<aside class="site__sidebar">
		<?= get_sidebar( 'aside-calendrier' ); ?>
		
		<?= get_sidebar( 'aside-citation' ); ?>
	</aside><!-- .site__sidebar -->
