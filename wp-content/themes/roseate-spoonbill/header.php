<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="wrapper">
            <header class="site-header">
                <div class="columns is-mobile">
                    <div class="column has-text-centered-desktop has-text-centered-widescreen has-text-centered-fullhd">
                        <img 
                            class="image is-not-centered-mobile"
                            src="http://www.woodlandwonders.org/wp-content/uploads/2015/01/logo-trans.png"
                            alt="Woodland Wonders logo" 
                        /> <!-- logo  -->
                    </div> <!-- .column  -->
                    <div class="column is-hidden-tablet is-hidden-desktop is-hidden-widescreen is-hidden-fullhd">
                        <button id="hambuger-menu-toggle" class="hamburger is-pulled-right" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button> <!-- .hamburger-menu-toggle -->
                    </div> <!-- .column -->
                </div>
            </header> <!-- .site-header -->
            <nav id="menu" class="js-collaspe-menu">
                <div class="container is-desktop">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </div>
            </nav> <!-- #menu  -->

