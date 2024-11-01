<?php

namespace App\Controllers;

use Core\View;

class Inversionistas
{
    public function index()
    {
        $views = ['home/inversionistas/index'];
        $args  = ['title' => 'Crearq | Inversionistas'];
        View::render($views, $args);
    }
    
}
