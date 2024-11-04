<?php

namespace App\Controllers;

use Core\View;

class Blog
{
    public function index()
    {
        $views = ['home/blog/index'];
        $args  = ['title' => 'Crearq | Blog'];
        View::render($views, $args);
    }
    
}
