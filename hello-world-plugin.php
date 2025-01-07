<?php
/*
Plugin Name: Add Text To Footer
Version: 1.1
*/

namespace Pancakezys\HelloWorldPlugin;

class Plugin
{
    public function __construct()
    {
        add_action('wp_footer', [$this, 'hello_world']);
    }

    public function hello_world()
    {
        echo "<p>Hello World from Pancakezys Plugin! And version 1.1 announcement!</p>";
    }
}
new Plugin();
