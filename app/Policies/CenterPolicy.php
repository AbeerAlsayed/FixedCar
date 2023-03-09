<?php

namespace App\Policies;

use App\Models\Center;
use App\Models\User;
use App\Models\Role;

use App\Models\Inspection;

use App\Models\Service;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class CenterPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */

    public function  __construct()
    {

    }


    public function viewAny(User $user)
    {

//            if(in_array('view_center',Auth::user()->getpermission()))
//                return true;
//
//            else
//                return false;
        return true;
    }

//
//    /**
//     * Determine whether the user can view the model.
//     *
//     * @param  \App\Models\User  $user
//     * @param  \App\Models\Center  $center
//     * @return \Illuminate\Auth\Access\Response|bool
//     */
    public function view(User $user, Center $center)
    {
                    if(in_array('View_center',Auth::user()->getpermission()))
                return true;

            else
                return false;

    }
//
//    /**
//     * Determine whether the user can create models.
//     *
//     * @param  \App\Models\User  $user
//     * @return \Illuminate\Auth\Access\Response|bool
//     */
    public function create(User $user)
    {
        if(in_array('Create_center',$user->getpermission()) || $user->email=='admin@gmail.com')
        return true;
        else
            return false;
    }

//
//    /**
//     * Determine whether the user can update the model.
//     *
//     * @param  \App\Models\User  $user
//     * @param  \App\Models\Center  $center
//     * @return \Illuminate\Auth\Access\Response|bool
//     */
    public function update(User $user, Center $center)
    {
        if(in_array('Edit_center',$user->getpermission())|| $user->email=='admin@gmail.com')
            return true;

        else
            return false;
    }
//
//    /**
//     * Determine whether the user can delete the model.
//     *
//     * @param  \App\Models\User  $user
//     * @param  \App\Models\Center  $center
//     * @return \Illuminate\Auth\Access\Response|bool
//     */
    public function delete(User $user, Center $center)
    {
        if(in_array('Delete_center',$user->getpermission())|| $user->email=='admin@gmail.com')
            return true;

        else
            return false;
    }
//
//    /**
//     * Determine whether the user can restore the model.
//     *
//     * @param  \App\Models\User  $user
//     * @param  \App\Models\Center  $center
//     * @return \Illuminate\Auth\Access\Response|bool
//     */
    public function restore(User $user, Center $center)
    {
        if(in_array('Store_center',$user->getpermission())|| $user->email=='admin@gmail.com')
            return true;

        else
            return false;
    }
//
//    /**
//     * Determine whether the user can permanently delete the model.
//     *
//     * @param  \App\Models\User  $user
//     * @param  \App\Models\Center  $center
//     * @return \Illuminate\Auth\Access\Response|bool
//     */
    public function forceDelete(User $user, Center $center)
    {
        if(in_array('Delete_center',Auth::user()->getpermission())|| $user->email=='admin@gmail.com')
            return true;

        else
            return false;
    }


}
