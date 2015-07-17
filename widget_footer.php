<?php
/**
 * Created by PhpStorm.
 * User: georgrokita
 * Date: 15.07.15
 * Time: 12:48
 */


//#custom Widget Bereich

function create_custom_Widget_footer(){
    if ( is_active_sidebar( 'bottom-custom-widget-footer' ) ) {
        echo "<div id='sidebar-header'>";
            dynamic_sidebar( 'bottom-custom-widget-footer' );
        echo "</div>";
    }
}