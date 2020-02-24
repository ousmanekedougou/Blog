<?php

namespace App\Model\Admins;
use App\Model\Admins\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable; 
    
    public function roles()
    {
        return $this->belongsToMany(Role::class,'admin_roles');
    }

    // public function getNameAttribute($value)
    // {
    //     return uncfirst($value);
    // }

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
