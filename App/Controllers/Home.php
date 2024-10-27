<?php

namespace App\Controllers;

use Core\View;

class Home
{
    public function index()
    {
        $views = ['home/index'];
        $args  = ['title' => 'Crearq | Inicio'];
        View::render($views, $args);
    }

    public function view_nosotros()
    {
        $views = ['home/nosotros/index'];
        $args  = ['title' => 'Crearq | Nosotros'];
        View::render($views, $args);
    }

    public function exampleWithArgs($id = null)
    {
        $views = ['home/example_with_args'];
        $args  = [
            'title' => 'Home | Example',
            'id' => $id ?? 'No se envio ID'
        ];
        View::render($views, $args);
    }
}
