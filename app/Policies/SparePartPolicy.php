<?php

namespace App\Policies;

use App\Models\SparePart;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SparePartPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        if(in_array('View_SparePart',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SparePart  $sparePart
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, SparePart $sparePart)
    {
        if(in_array('View_SparePart',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if(in_array('Create_SparePart',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SparePart  $sparePart
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, SparePart $sparePart)
    {
        if(in_array('Edit_SparePart',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SparePart  $sparePart
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, SparePart $sparePart)
    {
        if(in_array('Delete_SparePart',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SparePart  $sparePart
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, SparePart $sparePart)
    {
        if(in_array('Store_SparePart',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SparePart  $sparePart
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, SparePart $sparePart)
    {
        if(in_array('Delete_SparePart',$user->getpermission()))
            return true;
        else
            return false;
    }
}
