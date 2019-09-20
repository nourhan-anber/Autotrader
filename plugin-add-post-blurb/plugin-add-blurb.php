<?php
/**
 * Plugin Name: AutoTrader Test Plugin
 */
function wpb_after_post_content($content){
    if (!is_single()) {  
        $content .= 'This is generated after the post is generated';
    }
        return $content;
    }
    add_filter( "the_content", "wpb_after_post_content" );