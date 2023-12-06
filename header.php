<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <!--Ajout du titre du site pour le menu burger-->
            <ul>
                <li class="site-title "><a href="#" rel="home">Fleurs d'oranger & chats errants</a></li>
            </ul>

            <div id="modal" class="modal" aria-controls="primary-menu" aria-expanded="false">
                <button class="modal-toggle burger_open" aria-controls="primary-menu" aria-expanded="false">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                <div class="modal-content">
                    <img class="modal-content_logo" src="<?php echo get_theme_file_uri() . '/assets/images/logo-1.png'; ?>" alt="Logo du site Koukaki">
                    <img class ="orchid_content" src="<?php echo get_theme_file_uri() . '/assets/images/orchid.png'; ?>" alt="logo menu fullscreen">
                    <img class ="flower_content" src="<?php echo get_theme_file_uri() . '/assets/images/flower.png'; ?>" alt="logo menu fullscreen">
                    <img class ="sunflower_content" src="<?php echo get_theme_file_uri() . '/assets/images/Sunflower.png'; ?>" alt="logo menu fullscreen">
                    <img class ="random_flower_content" src="<?php echo get_theme_file_uri() . '/assets/images/random_flower.png'; ?>" alt="logo menu fullscreen">
                    <img class ="kawaneko_content" src="<?php echo get_theme_file_uri() . '/assets/images/kawaneko-1.png'; ?>" alt="logo menu fullscreen">
                    <img class ="jaakuna_content" src="<?php echo get_theme_file_uri() . '/assets/images/jaakuna-1.png'; ?>" alt="logo menu fullscreen">
                    <img class ="orenjiiro_content" src="<?php echo get_theme_file_uri() . '/assets/images/orenjiiro-1.png'; ?>" alt="logo menu fullscreen">
                    <img class ="hibiscus_content" src="<?php echo get_theme_file_uri() . '/assets/images/hibiscus_footer.png'; ?>" alt="logo menu fullscreen">
            
                    <ul>
                        <li class="modal-content_story"><a href="#story">Histoire</a></li>
                        <li class="modal-content_characters"><a href="#characters">Personnages</a></li>
                        <li class="modal-content_place"><a href="#place">Lieu</a></li>
                        <li class="modal-content_studio"><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <div class="modal-content_footer">
                        <a href="#">STUDIO KOUKAKI</a></li>
                    </div>
                </div><!-- #modal-content -->
            </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
