<?php
/**
 * The template file to show the front page display.
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */

require_once('widget_footer.php');

get_header(); 

?>

    <div id="featured_pages" class="clearfix">

        <div class="contentBoxFontPage" >
            <img src="http://lsgrmtb.gienah.uberspace.de/wordpress/wp-content/uploads/2015/07/edb_logo.png">
        </div>

        <div class="contentBoxFontPage" >
            <img src="http://lsgrmtb.gienah.uberspace.de/wordpress/wp-content/uploads/2015/07/edb_staff.jpg">
        </div>

        <div class="contentBoxFontPage">
            <div class="contentBoxHalfFontPage">
                <h3><a href="#"> Akademie für Junges Engagement</a></h3>
            </div>
            <div class="contentBoxHalfFontPage">
                <h3><a href="#">Stiftung Junger Menschen</a></h3>
            </div>
        </div>


        <div class="inner-wrap">
            <?php create_custom_Widget_footer(); ?>
        </div>


        <div class="contentBoxHalfFontPage" >
            <h3><a href="http://localhost/wordpress/?page_id=51">Events</a></h3>
        </div>

<?php
        $args =array(
            'post_type' => 'page',
            'pagename' => 'news',
        );
        $pages = query_posts($args);
        //var_dump($pages);
?>

        <div class="contentBoxHalfFontPage" >
            <h3><a href="<?php echo $pages[0]->guid ?>">News</a></h3>
        </div>

    </div>


<?php get_footer(); ?>

