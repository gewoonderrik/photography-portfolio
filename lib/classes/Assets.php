<?php
namespace LauraWienk;

final class Assets
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'frontend']);
    }

    public function frontend()
    {
        /**
         * Style
         */
        $stylePath = '/styles/dist/main.css';
        $styleModTime = filemtime(get_stylesheet_directory() . $stylePath);
        wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i|Playfair+Display:400,400i,700,700i,900,900i');
        wp_enqueue_style('main', get_stylesheet_directory_uri() . $stylePath, null, $styleModTime);

        /**
         * Script
         */
        $scriptPath = '/scripts/dist/all.js';
        $scriptModTime = filemtime(get_stylesheet_directory() . $scriptPath);
        wp_enqueue_script('main', get_stylesheet_directory_uri() . $scriptPath, null, $scriptModTime, true);
    }
}
