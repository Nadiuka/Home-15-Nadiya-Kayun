<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package advocatus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display" rel="stylesheet">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="container clearfix">
            <div class="site-branding logo">
                <?php
                the_custom_logo();
                ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                ));
                ?>
            </nav><!-- #site-navigation -->
        </div>
        <div class="main-img"><img src="<?php echo get_header_image();?>" alt="mainfoto"></div>
        <div class="header">
            <div class="container clearfix header-title">
                <div class="main-header">
                    <h1><?php echo get_theme_mod('Title');?></h1>
                    <div class="lawyer"><?php echo get_theme_mod('SubTitle');?></div>
                </div>
                <div>
                    <a class="contact-me" href="#"><?php echo get_theme_mod('LinkContactMe');?></a>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
