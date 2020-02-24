<?php

namespace App\Policies;

use App\Model\Admins\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any posts.
     *
     * @param  \App\Model\user\Admin  $user
     * @return mixed
     */
    public function viewAny(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\Model\user\Admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(Admin $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\Model\user\Admin  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user,1); // id de la permission create dans la table permissions
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Model\user\Admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user,2);// id de la permission update dans la table permissions
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Model\user\Admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user,3);// id de la permission delete dans la table permissions
    }

    public function tag(Admin $user)
    {
        return $this->getPermission($user,8); // id de la permission tag dans la table permissions
    }

    public function categorie(Admin $user)
    {
        return $this->getPermission($user,9);// id de la permission categporie dans la table permissions
    }

    protected function getPermission($user,$p_id)
    {
          
        foreach($user->roles as $role)
        {
            foreach($role->permissions as $permission)
            {
                if($permission->id == $p_id)
                {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Determine whether the user can restore the post.
     *
     * @param  \App\Model\user\Admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function restore(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the post.
     *
     * @param  \App\Model\user\Admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function forceDelete(Admin $user)
    {
        //
    }
}
