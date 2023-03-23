<?php

namespace App\Policies;

use App\Models\Bill;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class BillPolicy
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
        if($user->getRoleadmin())
            return true;
        if(in_array('View_bill',$user->getpermission()))

            return true;

        else
            return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Bill $bill)
    {
        if($user->getRoleadmin())
            return true;
        if(in_array('View_bill',$user->getpermission()))

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
        if($user->getRoleadmin())
        return true;
        if(in_array('Create_bill',$user->getpermission()))

            return true;

        else
            return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Bill $bill)
    {
        if($user->getRoleadmin())
        return true;
        if(in_array('Edit_bill',$user->getpermission()))

        {return true;}

        else
            return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Bill $bill)
    {
        if($user->getRoleadmin())
            return true;
        if(in_array('Delete_bill',$user->getpermission()))

            return true;

        else
            return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Bill $bill)
    {
        if($user->getRoleadmin())
            return true;
        if(in_array('Store_bill',$user->getpermission()))

            return true;

        else
            return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Bill $bill)
    {
        if($user->getRoleadmin())
            return true;
        if(in_array('Delete_bill',$user->getpermission()))

            return true;

        else
            return false;
    }
}
