<?php

namespace Maestro\MaestroAdmin\App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maestro\MaestroAdmin\App\Models\UserAdmin;
use Illuminate\Support\Facades\Route;

class IndexAdminController extends AdminPanelController
{

    public function __construct()
    {
        parent::__construct();

        $this->title = 'Главная';
    }


    public function index()
    {

        $data['breadcrumbs'][] = [
            'text' => $this->title,
            'href' => route('admin')
        ];
             
        $this->data = array_add($this->data, 'breadcrumbs', $data['breadcrumbs']);

        //dump(str_slug('иван'));   
       // return $this->isAdmin();       
        //return redirect('/admin/login');

       // return view('admin::dashboard');

       // $authUserId = Auth::User()->id;
     
       // dump(UserAdmin::find($authUserId)->roles);

        $userAdmin = new UserAdmin();

       // dump($userAdmin->hasRole(['admin', 'moderator'], true));

       // dump( $userAdmin->canDo('read') );

        dump( $userAdmin->Permission() );

       // dump( $userAdmin->getPermissionView() );

        dump( $userAdmin->getPermissionEdit() );

      //  dump(Route::currentRouteName());

       // dump( $userAdmin->roles );
        //dump(Auth::User()->id);
        
        return $this->renderOutput('admin::dashboard');
    }

    public function getPost(Request $request)
    {
       return "Вот как-то так";
    }
}