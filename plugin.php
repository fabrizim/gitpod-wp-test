<?php
/**
 * Plugin Name: My First Plugin
 */

 add_action('wp_footer', function(){
    echo '<h1>hi</h1>';
 });