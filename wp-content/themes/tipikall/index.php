<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<div id="blog-page">
                <?php
                if ( have_posts() ) :

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/post/content', get_post_format() );

                    endwhile;

                    the_posts_pagination( array(
                        'prev_text' => '<i class="material-icons">navigate_before</i><span class="screen-reader-text">' . __( 'Previous page', 'tipikall' ) . '</span>',
                        'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'tipikall' ) . '</span><i class="material-icons">navigate_next</i>',
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tipikall' ) . ' </span>',
                    ) );

                else :

                    get_template_part( 'template-parts/post/content', 'none' );

                endif;
                ?>

</div><!-- #blog-page -->
<?php get_footer(); ?>
