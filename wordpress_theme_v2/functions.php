<?php

function ck_theme_support(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','ck_theme_support');

?>