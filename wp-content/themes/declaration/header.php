<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <header>
                <div class="logo-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 logo-box">
                                <div class="logo">
                                    <?php the_custom_logo(); ?>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 right-info">
                                <nav class="navbar navbar-expand-md">

                                    <button class="navbar-toggler" type="button" style="display:none" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/toggle.svg"></span> </button>

                                    <?php if (has_nav_menu('top')) : ?>
                                        <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
                                    <?php endif; ?>


                                </nav>
                                <div class="buttons-bx">
                                    <div class="button-box order"><a  data-toggle="modal" data-target="#exampleModal"  href="<?php echo get_theme_mod('order_link'); ?>"> <?php echo get_theme_mod('order'); ?></a></div>
                                    <div class="button-box "><a id="reserveTable" href="<?php echo get_theme_mod('reserve_link'); ?>"><?php echo get_theme_mod('reserve'); ?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div class="site-content-contain">
                <div id="content" class="site-content">
