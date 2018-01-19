<?php

namespace Maestro\MaestroAdmin\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maestro\MaestroAdmin\App\Helpers\RoutesHelper;
use Maestro\MaestroAdmin\App\Models\Article;
use Maestro\MaestroAdmin\App\Models\Menu;
use Maestro\MaestroAdmin\App\Models\UserAdmin;
use Maestro\MaestroAdmin\App\Repositories\ArticlesRepository;
use Maestro\MaestroAdmin\App\Repositories\MenuRepository;

class AdminPanelController extends Controller
{
    public $title;
    public $userAdmin;
    protected $routeAdmin;

    protected $menu_rep;
    protected $article_rep;

    public $data = [];

    public function __construct()
    {
        $this->userAdmin = new UserAdmin();

        $this->routeAdmin = new RoutesHelper();

        $this->article_rep = new ArticlesRepository(new Article);

        $this->menu_rep = new MenuRepository(new Menu());
    }

    public function dataAdd()
    {
        $title = $this->title;
        $this->data =array_add($this->data, 'title', $title);

        $menu = $this->getMenu();
        $this->data =array_add($this->data, 'menu', $menu);

        return $this->data;
    }

    public function renderOutput($viewPath)
    {

        if (Auth::check()) {
            if (view()->exists($viewPath)) {
                return view($viewPath)->with($this->dataAdd());
            }
            return view('admin::errors.404');

        }

        return redirect('/login');
    }

    public function isAdmin()
    {    
        if (!Auth::user()) {

            dump(Auth::user());

           return redirect('admin.login');

        }
        return redirect('admin.login');
    }

    public function getMenu()
    {
        return $this->menu_rep->getAll();
    }
}