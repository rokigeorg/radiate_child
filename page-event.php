<?php
/**
 * Template Name: Event
 * Description: The Event template
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 *
 * * Created by PhpStorm.
 * User: georgrokita
 * Date: 16.07.15
 * Time: 18:16
*/

get_header();

echo '<div id="primary" class="content-area">';
echo '<main id="main" class="site-main" role="main">';


$args = array( 'post_type' => 'event', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

    $ID = get_the_ID();
    $the_title = get_the_title();
    $the_content = get_the_content();

    $urlLink = get_the_guid();

    echo '<article id="post-'.$ID .'" class="post-' .$ID . ' post type-post status-publish format-standard hentry category-allgemein">';
    echo '<header class="entry-header">
           <h1 class="entry-title"><a href="'.$urlLink. '" rel="bookmark">'.$the_title.'</a></h1>
            <div class="entry-meta">
            <span class="posted-on"><a href="'.$urlLink.'" rel="bookmark"></span>
                 <div class="entry-content">
                 <h4> ' . $the_content . '</h4>
                                <p>' .$the_content. '</p>
                                    </div><!-- .entry-content -->';
    the_excerpt();
    echo'<footer class="entry-meta">
        <span class="comments-link"><a href="http://localhost/wordpress/?p=45#respond" title="Kommentiere HTWK Eine Hochschule mit Unterstufenniveau">Hinterlassen Sie einen Kommentar</a></span>
        <span class="edit-link"><a class="post-edit-link" href="http://localhost/wordpress/wp-admin/post.php?post=' . $ID . '&amp;action=edit">Editieren</a></span>	</footer><!-- .entry-meta -->
        </article>';


endwhile;
wp_reset_postdata();

echo '</div></div>';
?>