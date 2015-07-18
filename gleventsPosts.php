<?php
    function have_events_in_DB(){

    	// DB Object
		global $wpdb;

		$sql = "SELECT * FROM gl_event";
        $results = $wpdb->get_results($sql);

    	//check if the glevent db is empty or not

    	if (count($results) == 0) {
    		//gl_event ist leer
    		return false;
    	}else{
    		//gl_event besitzt inhalte
    		return true;
    	};
    }


		// creates a blog post articel on the frontpage of the Wordpressblog
	function the_event(){

		// DB Object
		global $wpdb;
		// get all events from DB
		$sql = "SELECT * FROM gl_event";
        $results = $wpdb->get_results($sql);
        if ($results) { // 3
            foreach ($results as $e => $cur) { // 4
                //var_dump($cur);
                echo '<article id="post-' . $cur->ID . '" class="post-' . $cur->ID . ' post type-post status-publish format-standard hentry category-allgemein">


                           <header class="entry-header">
                                <h1 class="entry-title"><a href="http://localhost/wordpress/?p=' . $cur->ID . '" rel="bookmark">' . $cur->title . '</a></h1>

                                        <div class="entry-meta">
                                    <span class="posted-on"><a href="http://localhost/wordpress/?p=' . $cur->ID . '" rel="bookmark"></span>

                                <div class="entry-content">
                                <h4> ' . $cur->startDate . '</h4>
                                <p>' . htmlentities($cur->invitationtext) . '</p>
                                    </div><!-- .entry-content -->

                            <footer class="entry-meta">


                                        <span class="comments-link"><a href="http://localhost/wordpress/?p=45#respond" title="Kommentiere HTWK Eine Hochschule mit Unterstufenniveau">Hinterlassen Sie einen Kommentar</a></span>

                                <span class="edit-link"><a class="post-edit-link" href="http://localhost/wordpress/wp-admin/post.php?post=' . $cur->ID . '&amp;action=edit">Editieren</a></span>	</footer><!-- .entry-meta -->
                        </article>';


            } // Ende 4
        } // Ende 3
        else {
            echo '<p>Die Anfrage konnte nicht bearbeitet werden!</p>';
        }
	}


function create_EventArticels()
{
    echo '<div id="primary" class="content-area"><main id="main" class="site-main" role="main">';

    $status = have_events_in_DB();
    if ($status == true) {
        /* Start the Loop */

        the_event();
        radiate_paging_nav();
    } else {
        get_template_part('content', 'none');
    }

    echo "</main></div>";


}

?>



