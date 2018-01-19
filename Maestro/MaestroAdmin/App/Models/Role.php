<?php

namespace Maestro\MaestroAdmin\App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function usersAdmin()
    {
        return $this->belongsToMany('Maestro\MaestroAdmin\App\Models\UserAdmin', 'role_user', 'role_id', 'user_id' );
    }

    public function permission()
    {
        return $this->belongsToMany('Maestro\MaestroAdmin\App\Models\Permission', 'role_permission', 'role_id', 'permission_id');
    }
}