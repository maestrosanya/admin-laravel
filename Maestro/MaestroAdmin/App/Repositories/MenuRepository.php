<?php

namespace Maestro\MaestroAdmin\App\Repositories;

use Maestro\MaestroAdmin\App\Models\Menu;

class MenuRepository extends Repository
{
    
    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }
}