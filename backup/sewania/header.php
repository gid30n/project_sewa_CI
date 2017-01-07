<?php
/**
 * The template for displaying the header.
 *
 * @package Writsy
 * @since   Writsy 1.0.0
 */

defined('ABSPATH') or die('Cheatin\' Uh?');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header id="site-header" class="site-header" role="banner">
            <div class="container">
                <?php get_template_part('partials/toolbar'); ?>

                <div class="site-header-content">
                    <div class="site-brand">
                        <?php 
                        if ($logo = writsy_get_option('logo')) {
                            printf('<a href="%1$s" class="site-logo" rel="home"><img src="%2$s" alt="%3$s"></a>',
                                esc_url(home_url('/')),
                                esc_url($logo),
                                esc_attr(get_bloginfo('name', 'display'))
                            );
                        }
                        else {
                            $tag = (is_front_page() && is_home()) ? 'h1' : 'p';

                            printf('<%1$s class="site-title h1"><a href="%2$s" rel="home"><span>%3$s</span></a></%1$s>',
                                esc_html($tag),
                                esc_url(home_url('/')),
                                esc_attr(get_bloginfo('name', 'display'))
                            );
                        }

                        if (writsy_get_option('tagline', true)) {
                            printf('<p class="site-description">%s</p>',
                                esc_html(get_bloginfo('description', 'display'))
                            );
                        }
                        ?>
                    </div>

                    <?php
                    if (writsy_get_option('social_header', true)) {
                        get_template_part('partials/social', 'buttons');
                    }

                    if (writsy_get_option('newsletter_dialog', true)) {
                        get_template_part('partials/newsletter', 'dialog');
                    }
                    ?>
                </div>
            </div>
        </header>

        <nav id="site-navigation" class="site-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location'  => 'main',
                'menu_class'      => 'nav',
                'container_class' => 'container',
                'fallback_cb'     => 'writsy_main_menu_fallback'
            ));
            ?>
        </nav>

        <main id="site-main" class="site-main" role="main">