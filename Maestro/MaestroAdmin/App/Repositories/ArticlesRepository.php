<?php

namespace Maestro\MaestroAdmin\App\Repositories;

use Maestro\MaestroAdmin\App\Models\Article;

class ArticlesRepository extends Repository
{

    public function __construct(Article $article)
    {
        $this->model = $article;
    }
}