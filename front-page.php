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
            <img src="http://localhost/wordpress/wp-content/uploads/2015/07/edb_logo.png">
        </div>

        <div class="contentBoxFontPage" >
            <img src="http://localhost/wordpress/wp-content/uploads/2015/07/edb_staff.jpg">
        </div>


        <div class="contentBoxHalfFontPage" >
            <h3><a href="#"> Akademie für Junges Engagement</a></h3>
        </div>
        <div class="contentBoxHalfFontPage" >
            <h3><a href="#">Stiftung Junger Menschen</a></h3>
        </div>



        <div class="contentBoxFontPage" >
            <?php create_custom_Widget_footer(); ?>
        </div>

        <div class="contentBoxHalfFontPage" >
            <h3><a href="http://localhost/wordpress/?page_id=51">Events</a></h3>
        </div>




        <div class="contentBoxHalfFontPage" >
            <h3><a href="http://localhost/wordpress/event-single.php">News</a></h3>
        </div>

    </div>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <p> Startseite</p>
        </main>
    </div>

<?php get_footer(); ?>
