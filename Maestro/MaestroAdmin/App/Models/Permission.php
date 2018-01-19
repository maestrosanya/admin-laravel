<?php

namespace Maestro\MaestroAdmin\App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permission';

    public function roles()
    {
        return $this->belongsToMany('Maestro\MaestroAdmin\App\Models\Role', 'role_permission', 'permission_id', 'role_id');
    }
}