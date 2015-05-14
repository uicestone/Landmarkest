<?php

add_action('wp_enqueue_scripts', function(){
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), null);
	wp_register_script('jquery', 'http://libs.baidu.com/jquery/2.1.1/jquery.min.js', array(), null);
	wp_enqueue_style('style');
	wp_enqueue_script('jquery');
});