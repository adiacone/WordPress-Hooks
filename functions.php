<?php

/**
 * Makes the tags metabox appear on the page editing screen.
 */
function prefix_tags_for_pages() {
	register_taxonomy_for_object_type( 'post_tag', 'page' );
}
add_action( 'init', 'prefix_tags_for_pages' );

?>
