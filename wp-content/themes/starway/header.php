<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starway
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav class="container navbar">
			<div class="navbar-header pull-left">
				<a href="/">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/starway-logo.svg">
				</a>
			</div>
			<div class="nav menu-button navbar-nav pull-right">
				<div class="stripe-block">
					<div class="menu-stripe stripe1"></div>
					<div class="menu-stripe stripe2"></div>
					<div class="menu-stripe stripe3"></div>
					<div class="menu-stripe stripe4"></div>
				</div>
			</div>
		</nav>

	</header><!-- #masthead -->
    <div class="main-menu">
        <nav id="site-navigation" class="main-navigation">

            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav><!-- #site-navigation -->
    </div>


