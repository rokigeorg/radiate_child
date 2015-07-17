<?php

add_action( 'init', 'init_external_routing' );
function init_external_routing()
{
    global $wp_rewrite;
    $plugin_url = plugins_url( 'event-single.php', __FILE__ );
    $plugin_url = substr( $plugin_url, strlen( home_url() ) + 1 );
    // The pattern is prefixed with '^'
    // The substitution is prefixed with the "home root", at least a '/'
    // This is equivalent to appending it to `non_wp_rules`
    $wp_rewrite->add_external_rule( 'event-single.php', $plugin_url );
}

?>