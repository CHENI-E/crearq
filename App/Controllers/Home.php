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

    public function view_proyectos()
    {
        $views = ['home/proyectos'];
        $args  = ['title' => 'Crearq | Proyectos'];
        View::render($views, $args);
    }

    public function view_postVenta()
    {
        $views = ['home/postVenta/index'];
        $args  = ['title' => 'Crearq | Post-Venta'];
        View::render($views, $args);
    }

    public function view_servicio()
    {
        $views = ['home/servicio/index'];
        $args  = ['title' => 'Crearq | Servicio'];
        View::render($views, $args);
    }

    public function view_inversionista()
    {
        $views = ['home/inversionista/index'];
        $args  = ['title' => 'Crearq | Inversionista'];
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
