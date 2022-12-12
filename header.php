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
			wp_nav_menu(
				array(
					"menu" => "principal",
					"container" => "nav",
					"container_class" => "menu__principal",
				)
			);
		?>

		<div class="site__branding">
			<?php
			the_custom_logo();

			if ( is_front_page() && is_home() ) :
			?>
				<h1 class="site__title"><a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home"><?= bloginfo( 'name' ); ?></a></h1>
			<?php
			else :
			?>
				<p class="site__title"><a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home"><?= bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

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
		</div><!-- .site__branding -->
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
		<?= get_sidebar( 'calendrier' ); ?>
		
		<?= get_sidebar( 'grande-citation' ); ?>
	</aside><!-- .site__sidebar -->
