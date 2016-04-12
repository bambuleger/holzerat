<?php
  /*
    Sourcecode Cleanup
    @package holzerat
  */

/*
============================================================
Remove Generator Version Number
============================================================
*/

/* Remove Version String from js and css */
function holzer_remove_wp_version_strings($src) {
    global $wp_version;
    parse_str(parse_url($src, PHP_URL_QUERY), $query);
    if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
        $src = remove_query_arg('ver',$src);
    }
    return $src;
}

add_filter('script_loader_src', 'holzer_remove_wp_version_strings');
add_filter('style_loader_src', 'holzer_remove_wp_version_strings');

/* Remove Metatag Generator from Header */
function holzer_remove_meta_version() {
    return '';
}

add_filter('the_generator', 'holzer_remove_meta_version');
