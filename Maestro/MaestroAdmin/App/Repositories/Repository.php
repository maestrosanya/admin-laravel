<?php

namespace Maestro\MaestroAdmin\App\Repositories;

abstract class Repository
{
    protected $model;

    public function getAll()
    {
        return $this->model->all();
    }
}