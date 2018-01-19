<?php

namespace Maestro\MaestroAdmin\App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Maestro\MaestroAdmin\App\Components\Breadcrumbs;
use Maestro\MaestroAdmin\App\Models\Article;
use Maestro\MaestroAdmin\App\Models\UserAdmin;

class ArticleAdminController extends AdminPanelController
{
      
    protected $model;

    public function __construct(Article $article) 
    {
        parent::__construct();

        $this->model = $article;

        $this->title = 'Статьи';
    }

    public function index( UserAdmin $userAdmin)
    {

        $data['breadcrumbs'] = [
            Breadcrumbs::add('Главная', route('admin')),
            Breadcrumbs::add($this->title, route('admin.articles'))
        ];
        $this->data = array_add($this->data, 'breadcrumbs', $data['breadcrumbs']);

        if ($userAdmin->can('index', $this->model)) {

            echo 'МОЖНО';

            $articles = $this->article_rep->getAll();
            $this->data = array_add($this->data, 'articles', $articles);

            return $this->renderOutput('admin::pages.articles.articles');

        } else {
            echo 'Доступ закрыт';
        }
    }

    public function edit($id)
    {
        $this->title = 'Редактирование статьи';

        $data['breadcrumbs'] = [
            Breadcrumbs::add('Главная', route('admin')),
            Breadcrumbs::add('Статьи', route('admin.articles')),
            Breadcrumbs::add($this->title, route('admin.articles.edit', $id))
        ];
        $this->data = array_add($this->data, 'breadcrumbs', $data['breadcrumbs']);

        if ($this->userAdmin->can('index', $this->model)) {

            echo 'МОЖНО';

            $article = $this->model->where('articles_id', '=', $id)->get();
            $this->data = array_add($this->data, 'articles', $article);

            return $this->renderOutput('admin::pages.articles.articles_edit');

        } else {
            echo 'Доступ закрыт';
        }
    }

    public function create(UserAdmin $userAdmin, Article $article)
    {
        if ($userAdmin->can('create', $article)) {

            echo 'МОЖНО';

            return $this->renderOutput('admin::articles-create'); 

        } else {
            echo 'Доступ закрыт';
        }

       // dump(Route::currentRouteName());

        dump($userAdmin->getPermissionView());

        foreach ($userAdmin->getPermissionView() as $permission) {

            dump($permission);

            if (str_is(Route::currentRouteName(), $permission)) {
                return 1;
            } else {

            }

        }return 0;
    }
}