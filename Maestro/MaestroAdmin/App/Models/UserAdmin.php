<?php

namespace Maestro\MaestroAdmin\App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

class UserAdmin extends User
{
    protected $table = 'users';

    protected $authUser;

    public function __construct()
    {
        $this->authUser = Auth::user();
    }

    public function roles()
    {
        return $this->belongsToMany('Maestro\MaestroAdmin\App\Models\Role', 'role_user', 'user_id', 'role_id');
    }


    /**
     * @return array
     */
    public function getAuthUserRoles()
    {
        if ($this->authUser->id) {
            
            if ( !isset( $this->find($this->authUser->id)->roles) ) {

                return null;

            }
            return $this->find($this->authUser->id)->roles;
        }

    }

    public function Permission()
    {

        $permission = [];

        foreach ($this->getAuthUserRoles() as $role) {
            foreach ($role->permission as $rolePermission) {

                $permission = $rolePermission;

            }
        }

        return $permission;
    }

    /**
     * @param $permArray
     * @return array
     */
    protected function getArrayStrReplace($permArray)
    {
        $array = [];


            foreach (json_decode($permArray) as $permission) {
                $array[] = str_replace('/', '.', $permission);
            }


        return $array;
    }


    /**
     * @return array
     */
    public function getPermissionView()
    {
        return isset($this->Permission()->view) ? $this->getArrayStrReplace($this->Permission()->view) : ['0'];
    }


    /**
     * @return array
     */
    public function getPermissionEdit()
    {
        return isset($this->Permission()->edit) ? $this->getArrayStrReplace($this->Permission()->edit) : ['0'];

    }

    public function canDoView()
    {
        foreach ($this->getPermissionView() as $permission) {
            
            if (str_is(Route::currentRouteName(), $permission)) {
                return true;
            }

        }
        return false;
    }

    public function canDoEdit()
    {
        foreach ($this->getPermissionEdit() as $permission) {

            if (str_is(Route::currentRouteName(), $permission)) {
                return true;
            }

        }
        return false;
    }



    /*public function getPermission()
    {
        $permission = [];

        foreach ($this->getAuthUserRoles() as $role) {
            foreach ($role->permission as $rolePermission) {

                $permission[] = $rolePermission['permission'];

            }
        }

        return $permission;
    }

    public function canDo($permName)
    {

        if (in_array($permName, $this->getPermission())) {
            return true;
        }

        return false;
    }

    public function hasRole($roleName, $require = false)
    {
        if ( is_array($roleName) ) {
            foreach ($roleName as $role) {

                $hasRole = $this->hasRole($role);

                if ($hasRole && $require == true) {
                    dump($hasRole);
                    return true;
                }

            }
        }



    }*/
}
