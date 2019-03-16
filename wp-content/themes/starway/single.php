<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package starway
 */
global $post;
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post(); ?>
            <div class="row">
                <div class="container">
                    <div class="col-md-8 col-xs-12 center-block space-bottom-x2">
                        <?php the_title( '<div class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );?>
                        <?php get_template_part( 'template-parts/content-author', 'none' ); ?>
                    </div>
                    <div class="col-md-10 col-xs-12 center-block">
                        <?php if ( has_post_thumbnail() ) {
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                            <a href="<?php echo esc_url( get_permalink());?>"><img class="post-image space-bottom-x2 center-block" src="<?php echo $url ?>"/></a>
                        <?php } ?>
                    </div>
                        <div class="post-container col-md-8 col-xs-12 center-block space-bottom-x4">

                            <div class="post-content space-bottom-x2">
                                <?php echo the_content();?>
                            </div>

                        </div>
                    <?php the_post_navigation();?>
                </div>





		<?php endwhile; // End of the loop.	?>

            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
