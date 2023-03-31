<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use \Illuminate\Database\Eloquent\Relations\belongsTo;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function center(): belongsTo
    {
        return $this->belongsTo(Center::class,'center_id');
    }

//    public function Warehouse():belongsTo
//    {
//        return $this->belongsTo(Warehouse::class,'warehouse_id');
//    }

    public function Inspections():HasMany
    {
        return $this->hasMany(Inspection::class);
    }

    public function Roles():BelongsToMany
    {
        return $this->belongsToMany(Role::class,'user_role');
    }

    public function getpermission()
    {
        $permission=[];
        foreach (Auth::user()->Roles as $per)
        {
            foreach ($per->Permissions as $pe)
            {
                array_push($permission,$pe->name);
            }
        }
        return $permission;
    }
    public function getRoleadmin()
    {

        foreach (Auth::user()->Roles as $per) {
            if ($per->name == 'Admin')
                return true;
            else
                return false;
        }
    }

        public function getRoleManeger()
    {

        foreach (Auth::user()->Roles as $per)
        {
            if($per->name=='Manager_Center')
                return true;
            else
                return false;
        }
    }

}
