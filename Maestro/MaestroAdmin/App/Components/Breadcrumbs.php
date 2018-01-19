<?php

namespace Maestro\MaestroAdmin\App\Components;

class Breadcrumbs
{
    static protected $crumb = [];

    static public function add($name, $route)
    {
        self::$crumb = [
            'text' => $name,
            'href' => $route
        ]; 

        return self::$crumb;
    }

}