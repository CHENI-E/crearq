<?php

namespace App\Controllers;

use Core\View;

class Comunicate
{
    public function index()
    {
        $views = ['home/comunicate/index'];
        $args  = ['title' => 'Crearq | Comunicate'];
        View::render($views, $args);
    }
    
}
