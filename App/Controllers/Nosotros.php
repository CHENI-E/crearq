<?php

namespace App\Controllers;

use Core\View;

class Nosotros
{
    public function index()
    {
        $views = ['home/nosotros/index'];
        $args  = ['title' => 'Crearq | Nosotros'];
        View::render($views, $args);
    }
    
}
