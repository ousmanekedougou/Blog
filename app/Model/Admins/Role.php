<?php

namespace App\Model\Admins;

use App\Model\Admins\Role;
use App\Model\Admins\Admin;
use App\Model\Admins\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'permission_roles');
    }

    public function admins()
    {
        return $this->belongsToMany(Admin::class,'admin_roles');
    }
}
