<?php
/**
 * The template for displaying the header
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--    Loading Google Icons to use with Materialize CSS Framework    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--    Loading font-awesome fonts icons to use for social media links    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="main-page">
    <header id="top-nav-bar">
        <div class="row">
            <div id="slogan" class="col s12 m4">

            </div>
            <div id="logo-box" class="col s12 m4">
                <div class="logo-svg" id="logo-header">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo getTemplateImgRoot(); ?>/logo-tipikall-grey.svg">
                    </a>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="row">
                    <div class="col s12 m12" id="top-menu-right">
                        <div class="fixed-action-btn toolbar direction-top" style="transition: transform 0.2s ease 0s; transform: translate3d(0px, 0px, 0px);">
                            <a class="btn-floating btn-large" style="transition: transform 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) 0s; transform: translate3d(0px, 0px, 0px);">
                                <i id="top-menu-icon" class="material-icons dp48">menu</i>
                            </a>
                            <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
                        </div>
                    </div>
                    <div id="cta-top-menu" class="col s12 m12">
                        <a href="#" class="waves-effect waves-light btn-large">Webiniaire</a>
                        <a href="#" class="waves-effect waves-light btn-large">Devis</a>
                    </div>
                </div>
            </div>
    </header>