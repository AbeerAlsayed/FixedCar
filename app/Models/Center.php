<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Relations\HasMany;
use \Illuminate\Database\Eloquent\Relations\HasOne;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Center extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function users():HasMany
    {
        return $this->hasMany(User::class ,'center_id');
    }

    public function Inspections(): HasMany
    {
        return $this->hasMany(Inspection::class ,'center_id');
    }

    public function  Warehouse():HasOne
    {
        return $this->hasOne(Warehouse::class ,'center_id');
    }

    public function Services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class,'center_service');
    }
}
