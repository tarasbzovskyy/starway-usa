<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starway
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="row">
                <div class="container">
                    <h1 class="page-title space-bottom-x4 space-top-x4"><?php the_archive_title(); ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <?php
                            if ( have_posts() ) :

                            if ( is_home() && ! is_front_page() ) : ?>



                                <?php
                            endif;

                            /* Start the Loop */
                            while ( have_posts() ) : the_post(); ?>

                            <div class="post-container space-bottom-x4">
                                <?php if ( has_post_thumbnail() ) {
                                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                                    <a href="<?php echo esc_url( get_permalink());?>"><img class="post-image" src="<?php echo $url ?>"/></a>
                                <?php }

                                the_title( '<div class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );?>
                                <div class="post-content space-bottom-x2">
                                    <?php echo wp_trim_words(get_the_content(), 30, '<a class="read-more-article red-text" href="'.get_permalink().'">Read More</a>');?>
                                </div>

                                <?php get_template_part( 'template-parts/content-author', 'none' ); ?>
                        </div>
                        <?php
                        endwhile;

                        the_posts_navigation();

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif; ?>
                    </div>

                    <?php get_template_part( '/sidebar', 'none' ); ?>

                </div>
            </div>
    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
