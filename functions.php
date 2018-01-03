<?php

add_action('wp_enqueue_scripts', 'protocol_child_theme_scripts');

function protocol_child_theme_scripts() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
