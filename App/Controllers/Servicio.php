<?php

namespace App\Controllers;

use Core\View;

class Servicio
{
    public function index()
    {
        $views = ['home/servicio/index'];
        $args  = ['title' => 'Crearq | Servicio'];
        View::render($views, $args);
    }
    
}
