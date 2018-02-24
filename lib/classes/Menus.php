<?php
namespace LauraWienk;

final class Menus
{
    public function __construct()
    {
        add_action('init', [$this, 'register']);
    }

    public function register()
    {
        register_nav_menu('main', 'Main navigation');
    }
}
