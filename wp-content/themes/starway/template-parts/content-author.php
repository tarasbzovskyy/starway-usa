<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starway
 */

?>
<?php $user = wp_get_current_user();

if ( $user ) :
?>
<div class="author-block flex-vertical-center">
    <div class="author-avatar"><img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" /></div>
    <div class="author-data">
        <div class="author-info">
            <strong><?php echo get_the_author_meta( 'first_name' ); echo ' '. get_the_author_meta( 'last_name' );?></strong>

        </div>

        <?php
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }
        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( 'c' ) ),
            esc_html( get_the_modified_date() )
        );
        $posted_on = sprintf(
        /* translators: %s: post date. */
            esc_html_x( '%s', 'post date', 'starway' ),
            '<span rel="bookmark">' . $time_string . '</span>'
        );
        echo  $posted_on;
        endif; ?>
    </div>
</div>

