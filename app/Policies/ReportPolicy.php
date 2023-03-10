<?php

namespace App\Policies;

use App\Models\Report;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReportPolicy
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
        if(in_array('View_Report',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Report $report)
    {
        if(in_array('View_Report',$user->getpermission()))
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
        if(in_array('Create_Report',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Report $report)
    {
        if(in_array('Edit_Report',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Report $report)
    {
        if(in_array('Delete_Report',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Report $report)
    {
        if(in_array('Store_Report',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Report $report)
    {
        if(in_array('Delete_Report',$user->getpermission()))
            return true;
        else
            return false;
    }
}
