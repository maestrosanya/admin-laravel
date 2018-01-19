<?php

namespace Maestro\MaestroAdmin\App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Route;
use Maestro\MaestroAdmin\App\Models\Article;
use Maestro\MaestroAdmin\App\Models\UserAdmin;

class ArticlesPolicy
{
    use HandlesAuthorization;

    protected $user;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct(UserAdmin $userAdmin)
    {
        $this->user = $userAdmin;
    }

    public function before()
    {
       // return $this->user->canDoView();

    }

    public function index() 
    {
        return $this->user->canDoView();
    }

    public function create(UserAdmin $userAdmin, Article $article)
    {
        return $userAdmin->canDoEdit();
    }
}
