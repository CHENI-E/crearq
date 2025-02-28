<?php

namespace App\Controllers;

use Core\View;

class LibroReclamacion
{
    public function index()
    {
        $views = ['home/libroReclamaciones/index'];
        $args  = ['title' => 'Crearq | Comunicate'];
        View::render($views, $args);
    }
    
}
