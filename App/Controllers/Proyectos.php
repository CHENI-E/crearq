<?php

namespace App\Controllers;

use Core\View;

class Proyectos
{
    public function los_geranios_328()
    {
        $views = ['home/proyectos/los_geranios_328'];
        $args  = ['title' => 'Crearq | Los Geranios 328'];
        View::render($views, $args);
    }

    public function roma_255()
    {
        $views = ['home/proyectos/roma_255'];
        $args  = ['title' => 'Crearq | Roma 255'];
        View::render($views, $args);
    }

    public function las_lilas_123()
    {
        $views = ['home/proyectos/las_lilas_123'];
        $args  = ['title' => 'Crearq | Las Lilas 123'];
        View::render($views, $args);
    }

    public function aurora_1940()
    {
        $views = ['home/proyectos/aurora_1940'];
        $args  = ['title' => 'Crearq | Aurora 1940'];
        View::render($views, $args);
    }

    public function aqua_2()
    {
        $views = ['home/proyectos/aqua_2'];
        $args  = ['title' => 'Crearq | Aqua 2'];
        View::render($views, $args);
    }
    
    public function rodin()
    {
        $views = ['home/proyectos/rodin'];
        $args  = ['title' => 'Crearq | Rodin'];
        View::render($views, $args);
    }

}
