<?php

namespace App\Controllers;

use Core\View;

class PostVenta
{
    public function index()
    {
        $views = ['home/postVenta/index'];
        $args  = ['title' => 'Crearq | Post-Venta'];
        View::render($views, $args);
    }
    
}
